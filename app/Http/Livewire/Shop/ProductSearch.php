<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;

class ProductSearch extends Component
{
    public $search = "";

    public function render()
    {
        return view('livewire.shop.product-search');
    }

    public function search(){
        
        $sdata = $this->search;
        //session()->flash('search', $sdata);
        return redirect(route('shop.searchresult', $sdata));

    }
}
