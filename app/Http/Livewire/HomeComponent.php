<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    protected $listeners = ['increaseQuantity' => 'addToCart'];

    public function render()
    {
        $categories = Category::limit(7)->get();

        $products = Product::where('quantity', '>', 0)->get();

        $products1 = Product::inRandomOrder()
        ->where('quantity', '>', 0)
        ->get();

 
        return view('livewire.home-component', compact('categories', 'products', 'products1'))->layout('layouts.user');
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
