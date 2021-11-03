<?php

namespace App\Http\Livewire\Admin;

use App\Models\Brand;
use Livewire\WithPagination;
use Livewire\Component;

class BrandComponent extends Component
{
    use WithPagination;

    public $isOpen = 0;
    public $search = "";

    public function render()
    {
        $brands = Brand::where('name', 'like', '%'.$this->search.'%')->paginate(10);
        return view('livewire.admin.brand-component', compact('brands'));
    }


}
