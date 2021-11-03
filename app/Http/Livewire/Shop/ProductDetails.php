<?php

namespace App\Http\Livewire\Shop;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetails extends Component
{
    protected $listeners = ['increaseQuantity' => 'addToCart'];
    public $slug;

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

        if(!$product){
            abort(404);
        }

        $related_products = (clone $query)
            ->where('category_id', $product->category_id)
            ->inRandomOrder()
            ->limit(5)
            ->get();

        return view('livewire.shop.product-details', compact('product', 'related_products'))
            ->layout('layouts.user');
    }
}
