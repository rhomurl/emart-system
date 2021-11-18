<?php

namespace App\Http\Livewire\Shop;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartIcon extends Component
{
    protected $listeners = ['updateCart' => 'render'];

    public function render()
    {
        return view('livewire.shop.cart-icon', [
            'cartAmount' => Cart::where('user_id', Auth::id())->sum('qty'),
        ]);
    }
}
