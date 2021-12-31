<?php

namespace App\Http\Livewire\Shop;

use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
Use DB;

class CategoryType extends Component
{
    use WithPagination;
    public $slug;
    public $perpage = 10;
    public $catname;
    public $slugproduct;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    
    public function render()
    {
        //$category_id = Category::select('id')->where('type', '=', $this->slug)->firstOrFail();
       
       //dd($category_id);
       //$results = Product::where('category_id', $category_id->id)->paginate($this->perpage);
    
        $results = DB::table('categories')
        ->leftJoin('products', 'categories.id', '=', 'products.category_id')
        ->select('categories.name as catname','products.name', 'products.id', 'products.slug as slugproduct', 'products.image', 'products.name', 'products.quantity', 'products.description','products.selling_price')
        ->where('categories.type', $this->slug)
        ->whereNotNull('products.name')
        ->paginate($this->perpage);

        $resultcount = DB::table('categories')
        ->leftJoin('products', 'categories.id', '=', 'products.category_id')
        ->select('categories.name as catname','products.name', 'products.id', 'products.slug as slugproduct', 'products.image', 'products.name', 'products.quantity', 'products.description','products.selling_price')
        ->where('categories.type', $this->slug)
        ->whereNotNull('products.name')->count();
   
        //dd($results);

        return view('livewire.shop.category-type', compact('results', 'resultcount'))->layout('layouts.user');
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
