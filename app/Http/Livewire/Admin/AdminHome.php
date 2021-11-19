<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Livewire\Component;

class AdminHome extends Component
{
    public function render()
    {
        $userCount = User::get()->count();
        $productCount = Product::get()->count();
        $orderCount = Order::get()->count();
        $orderTotal = Order::get()->sum('total');

        return view('livewire.admin.admin-home', compact('userCount', 'productCount', 'orderCount', 'orderTotal'))->layout('layouts.admin');
    }
}
