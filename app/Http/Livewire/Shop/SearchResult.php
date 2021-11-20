<?php

namespace App\Http\Livewire\Shop;

use Livewire\WithPagination;
use App\Models\Product;
use Livewire\Component;

class SearchResult extends Component
{
    use WithPagination;

    public $sdata;

    public function mount($sdata){
        $this->sdata = $sdata;
    }

    public function render()
    {
        $results = Product::where('name', 'LIKE', '%' . $this->sdata . '%')
            ->orWhere('slug','like','LIKE', "%{$this->sdata}%")
            ->paginate(5);
        
        $resultCount = Product::where('name', 'LIKE', '%' . $this->sdata . '%')
            ->orWhere('slug','like','LIKE', "%{$this->sdata}%")
            ->count();

        return view('livewire.shop.search-result', compact('results', 'resultCount'))->layout('layouts.user');
    }
}
