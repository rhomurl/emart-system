<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\AddressBook;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderDetails extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
    {
        $order = Order::findorFail($this->order_id);
    
        //$address = AddressBook::where('id', $order->address_book_id)->get();
        
        return view('livewire.user.order-details', compact('order'))->layout('layouts.user-profile');
    }
}
