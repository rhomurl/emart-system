<?php

namespace App\Http\Livewire\Shop;

use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DisplayProducts extends Component
{
    use WithPagination;

    public $perpage;

    public function render()
    {
        $results = Product::paginate($this->perpage);
        $resultCount = Product::count();


        return view('livewire.shop.display-products', compact('results', 'resultCount'))->layout('layouts.user');
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
        
        session()->flash('message', 'Product Added to Cart');
        return redirect(route('cart'));
    }
}
