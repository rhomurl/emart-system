<?php

namespace App\Http\Livewire\Admin;
use App\Models\Order;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class UserOrders extends Component
{
    use WithPagination;
    
    public $search;

    public function render()
    {
        $orders = Order::where('status', 'like', '%'.$this->search.'%')
            ->orWhere('id', 'like', '%'.$this->search.'%')
            ->paginate(10);
     
        return view('livewire.admin.user-orders', compact('orders'))->layout('layouts.admin');
    }
}
