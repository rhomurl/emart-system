<?php

namespace App\Http\Livewire\Shop;

use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Livewire\Component;

class ShoppingCart extends Component
{
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

        $this->totalCart = $cartItems->sum('total');

        return view('livewire.shop.shopping-cart', compact('cartItems'))->layout('layouts.user');
    }

    public function removefromCart($id){
        Cart::where('product_id', $id)
            ->where('user_id', Auth::id())
            ->delete();
        $this->emit('updateCart');
    }
}
