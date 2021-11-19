<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Livewire\Component;


class AccountOverview extends Component
{
    public function render()
    {
        $ordercount = Order::where('user_id', Auth::id())->count();
        $orderedcount = Order::where('user_id', Auth::id())
        ->orWhere('status', 'ordered')
        ->count();
        return view('livewire.user.account-overview', compact('ordercount', 'orderedcount'))->layout('layouts.user-profile');
    }
}
