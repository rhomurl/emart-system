<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class UserValidIDModal extends ModalComponent
{
    public function mount($id){
        $this->user_id = $id;
        $user = User::findOrFail($id);
        $this->validid = $user->validid;
    }

    public function render()
    {
        
        return view('livewire.admin.user-valid-i-d-modal');
    }
}
