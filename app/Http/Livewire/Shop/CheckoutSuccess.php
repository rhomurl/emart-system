<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;

class CheckoutSuccess extends Component
{
    public function render()
    {
        return view('livewire.shop.checkout-success')->layout('layouts.user');
    }
}
