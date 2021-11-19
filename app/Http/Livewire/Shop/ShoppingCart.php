<?php

namespace App\Http\Livewire\Shop;

use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class ShoppingCart extends Component
{
    protected $listeners = ['updateCart' => 'render', 'increaseQuantity' => 'addToCart'];

    public $taxTotal;
    public $taxRate = 0;
    public $shipping;
    public $totalCart;
    public $totalCartWithoutTax;
    public $totalWithTax;
    public $taxRt;
    public $taxValue = 0;
    public $countries;
    public $checkout_message;

    public function render()
    {
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
            } );

        $this->totalCartWithoutTax = $cartItems->sum('total') + $this->shipping;
        $this->taxRate = $this->totalCartWithoutTax * 0.12;
        $this->totalWithTax = $this->totalCartWithoutTax + ($this->totalCartWithoutTax * 0.12);

        $this->totalCart = $cartItems->sum('total');

        return view('livewire.shop.shopping-cart', compact('cartItems'))->layout('layouts.user');
    }

    public function setAmountForCheckout(){       

         $cartTotal = $this->totalCartWithoutTax + ($this->totalCartWithoutTax * 0.12) + 50;
         session()->put('checkout', [
             //'shipping' => $this->shipping,
             'shipping' => '50',
             'subtotal' => $this->totalCartWithoutTax,
             'tax' => $this->taxRate,
             'total' => $cartTotal,
         ]);
 
         return redirect()->route('checkout');
    }

    public function increaseQuantity($id)
    {
        $this->emit('increaseQuantity', $id);
    }

    public function decreaseQuantity($id, $qty)
    {
        if ($qty != 1) {
            Cart::where('product_id', $id)
                ->where('user_id', Auth::id())
                ->update(['qty' => $qty - 1]);
        } else {
            Cart::where('product_id', $id)
                ->where('user_id', Auth::id())
                ->delete();
        }
        $this->emit('updateCart');
    }

    public function removefromCart($id){
        Cart::where('product_id', $id)
            ->where('user_id', Auth::id())
            ->delete();
        $this->emit('updateCart');
    }

    public function addToCart($productId)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        $cart = Cart::where('product_id', $productId)
                    ->where('user_id', Auth::id())
                    ->first();

        
        if (!$cart) {
            Cart::create(['user_id' => Auth::id(), 'product_id' => $productId, 'qty' => 1]);
        } 
        else {
            $cart->update(['qty' => $cart->qty + 1]);
        }
        
        $this->emit('updateCart');
    }
}
