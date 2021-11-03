<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Component;

class CategoryComponent extends Component
{
    use WithPagination;

    public $isOpen = 0;
    public $search = "";

    public function render()
    {
        $categories = Category::where('name', 'like', '%'.$this->search.'%')->paginate(10);
        return view('livewire.admin.category-component', compact('categories'))->layout('layouts.admin');
    }
}
