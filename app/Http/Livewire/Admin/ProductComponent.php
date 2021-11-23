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
    protected $listeners = ['updateComponent' => 'render'];

    use WithFileUploads;
    use WithPagination;

    public $isOpen = 0;
    public $search = "";
    public $pagenum = 10;

    public function render()
    {
        $products = Product::where('name', 'like', '%'.$this->search.'%')
        ->orwhere('selling_price', 'like', '%'.$this->search.'%')
        ->orwhere('description', 'like', '%'.$this->search.'%')->paginate($this->pagenum);

        return view('livewire.admin.product-component', compact('products'))->layout('layouts.admin');
    }

    public function edit($id){
        $this->emit("openModal", "admin.product-edit", ["id" => $id]);
    }
    public function confirmDelete($id)
    {
        $product_qty = Product::where('id', $id)->whereNull('quantity')->get();
        if(count($product_qty)){
            $this->emit("openModal", "admin.failed-modal", ["message" => 'This product cannot be deleted']); 
        }
        else{
            $this->emit("openModal", "admin.success-modal", ["message" => 'Product Deleted Successfully']); 
            Product::where('id', $id)->delete();
        }     
    }
}
