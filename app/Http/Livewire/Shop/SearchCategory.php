<?php

namespace App\Http\Livewire\Shop;

use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SearchCategory extends Component
{
    use WithPagination;

    public $slug;
    public $perpage;
    public $catname;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
       $category_id = Category::select('id')->where('slug', '=', $this->slug)->firstOrFail();
       $this->catname = Category::select('name')->where('slug', '=', $this->slug)->firstOrFail();
 
       //dd($category_id);
       $results = Product::where('category_id', $category_id->id) 
            ->paginate($this->perpage);
        
        $resultCount = Product::where('category_id', $category_id->id)
            ->count();

        return view('livewire.shop.search-category', compact('results', 'resultCount'))->layout('layouts.user');
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
