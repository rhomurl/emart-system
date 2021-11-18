<?php

namespace App\Http\Livewire\User;

//use App\Models\User;
use Livewire\Component;


class AccountOverview extends Component
{
    public function render()
    {
        return view('livewire.user.account-overview')->layout('layouts.user-profile');
    }
}
