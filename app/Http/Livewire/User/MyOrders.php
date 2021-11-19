<?php

namespace App\Http\Livewire\User;

use Livewire\WithPagination;
use App\Models\AddressBook;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

use Notification;
use App\Models\User;
use App\Notifications\OrderNotification;

use Livewire\Component;

class MyOrders extends Component
{
    use WithPagination;

    public function render()
    {

        $orders = Order::where('user_id', Auth::id())->paginate(10);
        //$address = AddressBook::where('id', $orders->id);
        //dd($orders);

        return view('livewire.user.my-orders', compact('orders'))->layout('layouts.user-profile');
    }
}
