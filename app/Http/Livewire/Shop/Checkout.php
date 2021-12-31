<?php

namespace App\Http\Livewire\Shop;

use App\Models\Cart;
use App\Models\Voucher;
//use App\Models\Address;
use App\Models\Order;
//use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\AddressBook;

use Session;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use DB;

use App\Notifications\OrderConfirmation;

use Illuminate\Notifications\Notifiable;
use Livewire\Component;

class Checkout extends Component
{
    public $voucher, $discount, $voucher_msg, $vouchercount, $usage_qty;
    public $address_book_id, $payment_mode, $checkout_message, $shipping;
    
    public function render()
    {
        

        $addresses = AddressBook::with('barangay.city')
        ->where('user_id', Auth::id())
        ->latest()
        ->take(5)
        ->get();

        $old_cartItems = Cart::with('products')->get()->where('user_id', Auth::id())
            ->map(function (Cart $items) {
                return (object)[
                    'id' => $items->product_id,
                    'user_id'=> $items->user_id,
                    'slug' => $items->products->slug,
                    'name' => $items->products->name,
                    'brand' => $items->products->brand->name,
                    'image' => $items->products->image,
                    'selling_price' => $items->products->selling_price,
                    'qty' => $items->qty,
                    'total' => ($items->qty * $items->products->selling_price),
                ];
            } 
        );

        foreach($old_cartItems as $item)
        {
            if(!Product::where('id', $item->id)->where('quantity', '>=', $item->qty)->exists())
            {
                $removeItem = Cart::where('user_id', Auth::id())->where('product_id', $item->id)->first();
                $removeItem->delete();
            }
        }

        $cartItems = Cart::with('products')->get()->where('user_id', Auth::id())
            ->map(function (Cart $items) {
                return (object)[
                    'id' => $items->product_id,
                    'user_id'=> $items->user_id,
                    'slug' => $items->products->slug,
                    'name' => $items->products->name,
                    'brand' => $items->products->brand->name,
                    'image' => $items->products->image,
                    'selling_price' => $items->products->selling_price,
                    'qty' => $items->qty,
                    'total' => ($items->qty * $items->products->selling_price),
                ];
            } 
        );

        if($cartItems->count() == 0){
            redirect(route('cart'));
        }

        $this->totalCart = $cartItems->sum('total');

        if($this->totalCart > 2500){
            $this->shipping = 0;
        }
        else{
            if($this->address_book_id){
                $addr = AddressBook::where('id', $this->address_book_id)->first();
                $this->shipping = $addr->barangay->shippingfee;
            }
        }

        
        
        $this->totalCartWithoutTax = $cartItems->sum('total') + $this->shipping;
        $this->grandTotal = $this->totalCartWithoutTax;

        



        return view('livewire.shop.checkout', compact('addresses', 'cartItems'))->layout('layouts.user');
    }

    public function applyCoupon(){

        
        $voucher = Voucher::where('code', $this->voucher)->first();
        

        if(!$this->address_book_id){
            $this->voucher_msg = 'Select an address first!';
        }
        else if($voucher)
        {
            if($this->grandTotal < $voucher->min_spend){
                $this->voucher_msg = 'You are not qualified from this promo.';
            }
            else if($voucher->usage_qty == 0){
                $this->voucher_msg = 'Voucher is invalid or expired';
            }
            else{
                $this->voucherqty = $voucher->usage_qty/1; 
                if($voucher->discount_type == 'percent'){
                    $dsc = $voucher->discount_amt/100;
                    $this->discount = $dsc * $this->grandTotal;
                }
                else{
                    $this->discount = $voucher->discount_amt/1;
                }
                $this->grandTotal = $this->grandTotal - $this->discount;
                $this->voucher_msg = 'Voucher code applied!';
            }
        }
        else {
            $this->voucher_msg = 'Voucher is invalid or expired';
        }
    }
        
    public function placeOrder()
    {

        $this->validate([
            'address_book_id' => 'required',
            'payment_mode' => 'required',
        ]);
                
        $cart = Cart::with('product')->where('user_id', Auth::id())->get();
        $products = Product::select('id', 'quantity')
            ->whereIn('id', $cart->pluck('product_id'))
            ->pluck('quantity', 'id');

        foreach ($cart as $cartProduct){
            if(!isset($products[$cartProduct->product_id]) 
                || $products[$cartProduct->product_id] < $cartProduct->qty) {
                $this->checkout_message = 'Error: Product ' . $cartProduct->product->name . ' not found in stock';
            }
        }

        try{
            $this->resetValidation();
            DB::transaction(function () use ($cart) {
                $order = Order::create([
                    'user_id' => auth()->id(),
                    'address_book_id' => $this->address_book_id/1,
                    'subtotal' => $this->totalCart,
                    'discount' => $this->discount,
                    'shippingfee' => $this->shipping,
                    'total' => $this->grandTotal - $this->discount,
                    'status' => 'ordered'
                ]);

                foreach ($cart as $cartProduct){
                    $order->products()->attach($cartProduct->product_id, [
                        'quantity' => $cartProduct->qty,
                        'user_id' => auth()->id(),
                        'price' => $cartProduct->product->selling_price,
                    ]);
                    Product::find($cartProduct->product_id)->decrement('quantity', $cartProduct->qty);
                }

                if($this->payment_mode == 'cod'){
                    $transaction = new Transaction();
                    $transaction->order_id = $order->id;
                    $transaction->user_id = Auth::user()->id;
                    $transaction->mode = 'cod';
                    $transaction->status = 'ordered';
                    $transaction->save();
                }

            if($this->voucher)
            {
                if($this->voucherqty != 0){
                    Voucher::updateOrCreate(
                        ['code' => $this->voucher],
                        ['usage_qty' => $this->voucherqty - 1]
                    );
                }
            }

                Cart::where('user_id', Auth::user()->id)->delete();        
                //session()->forget('checkout');
                $this->emit('updateCart');

                Session::flash('orderid', $order->id);
                //session()->flash('orderid', );
                
                $user = Auth::user();
                $orderData = [
                    'greeting' => 'Thank you for your order!',
                    'name' => 'Hello ' . $user->firstname . ',',
                    'body' => ' Thank you for your order from Allena Mindoro. We received your order #' . $order->id . ' on ' . $order->created_at->format('F j Y h:i A') . ' and your payment method is Cash on Delivery. We will email you once your order has been shipped. We wish you enjoy shopping with us and thank you again for choosing our store!' ,
                    'orderText' => 'View Order',
                    'orderDetails' => [
                        'id' => $order->id,
                    ],
                    'url' => url(route('user.order.details', $order->id )),
                    'thankyou' => ''
                ];

                $user->notify(new OrderConfirmation($orderData));
                
                return redirect(route('checkout.success'));
            });
        } catch (\Exception $exception){
            $this->checkout_message = "Something wrong";
            //dd($exception->getMessage());
        }
    }
}
