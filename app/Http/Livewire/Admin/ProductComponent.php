<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Livewire\WithPagination;
use Livewire\Component;

class ProductComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $isOpen = 0;
    public $search = "";

    public function render()
    {
        $products = Product::where('name', 'like', '%'.$this->search.'%')
        ->orwhere('selling_price', 'like', '%'.$this->search.'%')
        ->orwhere('description', 'like', '%'.$this->search.'%')->paginate(2);

        return view('livewire.admin.product-component', compact('products'))->layout('layouts.admin');
    }



}
