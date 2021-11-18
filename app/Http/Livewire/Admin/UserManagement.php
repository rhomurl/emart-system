<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use DB;
use Livewire\WithPagination;
use Livewire\Component;

class UserManagement extends Component
{
    protected $listeners = ['updateComponent' => 'render'];

    use WithPagination;
    public $search = "";

    public function render()
    {
        $users = User::where('lastname', 'like', '%'.$this->search.'%')
        ->orwhere('firstname', 'like', '%'.$this->search.'%')
        ->orwhere('email', 'like', '%'.$this->search.'%')
        ->orwhere('contact_number', 'like', '%'.$this->search.'%')
        ->role('customer')->paginate(10);

        return view('livewire.admin.user-management', compact('users'))->layout('layouts.admin');
    }

    public function edit($id){
        $this->emit("openModal", "admin.user-edit", ["id" => $id]);
    }

    public function viewValidID($id){
        $this->emit("openModal", "admin.user-valid-i-d-modal", ["id" => $id]);
    }


}
