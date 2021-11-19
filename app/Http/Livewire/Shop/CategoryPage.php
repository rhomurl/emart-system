<?php

namespace App\Http\Livewire\Shop;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;

class CategoryPage extends Component
{
    public function render()
    {
        $categories = Category::take(8)->get(); 
        return view('livewire.shop.category-page', compact('categories'))->layout('layouts.user');
    }
}
