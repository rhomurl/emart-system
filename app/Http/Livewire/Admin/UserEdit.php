<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class UserEdit extends ModalComponent
{
    public $user, $user_id, $firstname, $lastname, $email, $contact_number;

    public function mount($id)
    {
            $this->user_id = $id;
            $user = User::findOrFail($this->user_id);
            $this->firstname = $user->firstname;
            $this->lastname = $user->lastname;
            $this->email = $user->email;
            $this->contact_number = $user->contact_number;
    }


    public function create(){
        $this->validate([
            'firstname' => 'required|regex:/[a-zA-Z0-9\s]+/|max:25',
            'lastname' => 'required|regex:/[a-zA-Z0-9\s]+/|max:25',
            'email' => 'required|regex:/[a-zA-Z0-9\s]+/|unique:users,email,'.$this->user_id.'',
            'contact_number' => 'required|regex:/[a-zA-Z0-9\s]+/|min:7|max:13',
        ]);

        $user = User::updateOrCreate(['id' => $this->user_id],
            ['firstname' => $this->firstname, 
            'lastname' => $this->lastname,
            'email' => $this->email,
            'contact_number' => $this->contact_number]
        );
        
        $this->emit("openModal", "admin.success-modal", ["message" => $this->user_id ? 'User Updated Successfully.' : 'User Added Successfully']);
        $this->resetInputFields();
    }

    private function resetInputFields(){
        $this->reset();
        $this->resetValidation();
    }

    public function fClose(){
        $this->forceClose()->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.user-edit');
    }
}
