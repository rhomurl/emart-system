<?php

namespace App\Http\Livewire\Shop;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetails extends Component
{
    protected $listeners = ['increaseQuantity' => 'addToCart'];
    
    public $cartProducts = [];
    public $slug, $qty;
    

    public function mount ($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        

        $query = Product::query();

        $product = (clone $query)
            ->where('slug', $this->slug)
            ->first();

        $productId = (clone $query)
        ->select('id')
        ->where('slug', $this->slug);
        
        
        if(!$product){
            abort(404);
        }

        $related_products = (clone $query)
            ->where('category_id', $product->category_id)
            ->whereNotIn('id', $productId)
            ->inRandomOrder()
            ->limit(8)
            ->get();

        return view('livewire.shop.product-details', compact('product', 'related_products'))
            ->layout('layouts.user');
    }

    
    public function addToCart($productId, $qty)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        $cart = Cart::where('product_id', $productId)
                    ->where('user_id', Auth::id())
                    ->first();

        if (!$cart) {
            Cart::create(['user_id' => Auth::id(), 'product_id' => $productId, 'qty' => $qty]);
        } 
        else {
            $cart->update(['qty' => $cart->qty + $qty]);
        }
        $this->cartProducts[] = $productId;
        $this->emit('updateCart');

        session()->flash('message', 'Product Added to Cart');
        return redirect(route('cart'));
        
    }

    public function minusQty(){
        if($this->qty > 1){
            $this->qty = $this->qty - 1;
        }
    }
    public function addQty(){
        $this->qty = $this->qty + 1;

    }
    
}
