<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::limit(7)->get();
        $products = Product::all(['name','slug','selling_price', 'image']);
        $products1 = Product::inRandomOrder()->get();

 
        return view('livewire.home-component', compact('categories', 'products', 'products1'))->layout('layouts.user');
    }
}
