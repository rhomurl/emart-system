<?php

namespace App\Http\Livewire\Shop;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\AddressBook;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use DB;

use App\Notifications\OrderConfirmation;

use Illuminate\Notifications\Notifiable;
use Livewire\Component;

class Checkout extends Component
{
    public $address_book_id, $payment_mode, $checkout_message;
    
    public function render()
    {
        $addresses = AddressBook::with('barangay.city')
        ->where('user_id', Auth::id())
        ->latest()
        ->take(5)
        ->get();

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


        return view('livewire.shop.checkout', compact('addresses', 'cartItems'))->layout('layouts.user');
    }

    public function placeOrder(){

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
            DB::transaction(function () use ($cart) {
                $order = Order::create([
                    'user_id' => auth()->id(),
                    'address_book_id' => $this->address_book_id/1,
                    'subtotal' => session()->get('checkout')['subtotal'],
                    'shippingfee' => session()->get('checkout')['shipping'],
                    'tax' => session()->get('checkout')['tax'],
                    'total' => session()->get('checkout')['total'],
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
                    $transaction->status = 'pending';
                    $transaction->save();
                }

                Cart::where('user_id', Auth::user()->id)->delete();        
                session()->forget('checkout');
                $this->emit('updateCart');

                
                session()->flash('orderid', $order->id);
                
                $user = Auth::user();
                $orderData = [
                    'greeting' => 'Thank you for your order!',
                    'name' => 'Hello ' . $user->firstname . ',',
                    'body' => ' Thank you for your order from Allena Mindoro.',
                    'orderText' => 'View Order',
                    'orderDetails' => [
                        'id' => $order->id,
                        'total' => $order->total,
                        'time' => $order->created_at->format('F j Y h:i A'),
                    ],
                    'url' => url(route('user.order.details', $order->id )),
                    'thankyou' => ''
                ];

                $user->notify(new OrderConfirmation($orderData));

                return redirect(route('checkout.success'));
            });
        } catch (\Exception $exception){
            $this->checkout_message = "Something wrong" . $exception;
        }



        /*
        $order->user_id = Auth::user()->id;
        $order->address_id = $this->address_id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->shippingfee = session()->get('checkout')['shipping'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->status = 'ordered';
        $order->save();

        $this->validate([
            'address_id' => 'required',
            'payment_mode' => 'required',
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->address_id = $this->address_id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->shippingfee = session()->get('checkout')['shipping'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->status = 'ordered';
        $order->save();

        $cartItems = Cart::with('products')->get()->where('user_id', Auth::id())
            ->map(function (Cart $items) {
                return (object)[
                    'id' => $items->product_id,
                    'user_id'=> $items->user_id,
                    'slug' => $items->products->slug,
                    'name' => $items->products->name,
                    'image' => $items->products->image,
                    'selling_price' => $items->products->selling_price,
                    'qty' => $items->qty,
                    'total' => ($items->qty * $items->products->selling_price),
                ];
            } 
        );
            
        foreach($cartItems as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->id;
            $orderItem->user_id = Auth::user()->id;
            $orderItem->price = $item->selling_price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();

            $product1 = Product::where('id', '=',$orderItem->product_id)->first();
            $q1 = $item->qty;
            $q2 = $product1->quantity;
            $sm = $q2 - $q1;
            $product = Product::where('id', $orderItem->product_id)->update(array('quantity' => $sm));
        }

        if($this->payment_mode == 'cod'){
            $transaction = new Transaction();
            $transaction->order_id = $order->id;
            $transaction->user_id = Auth::user()->id;
            $transaction->mode = 'cod';
            $transaction->status = 'pending';
            $transaction->save();
        }

        Cart::where('user_id', Auth::id())->delete();
        
        session()->forget('checkout');
        $this->emit('updateCart');

        
        session()->flash('orderid', $order->id);
        return redirect(route('checkout.success'));
        */
    }

    public function sendTestNotification($orderId, $orderTotal)
    {
        
    }
}
