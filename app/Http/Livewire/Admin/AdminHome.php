<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Product;
use Livewire\Component;

class AdminHome extends Component
{
    public function render()
    {
        $userCount = User::get()->count();
        $productCount = Product::get()->count();

        return view('livewire.admin.admin-home', compact('userCount', 'productCount'))->layout('layouts.admin');
    }
}
