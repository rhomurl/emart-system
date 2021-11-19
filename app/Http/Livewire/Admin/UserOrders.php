<?php

namespace App\Http\Livewire\Admin;
use App\Models\Order;
use Livewire\Component;

class UserOrders extends Component
{
    public function render()
    {
        $orders = Order::paginate(10);
        return view('livewire.admin.user-orders', compact('orders'))->layout('layouts.admin');
    }
}
