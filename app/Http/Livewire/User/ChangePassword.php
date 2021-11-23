<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{
    public $error_message, $success_message, $password, $new_confirm_password, $new_password, $current_password; 

    public function mount()
    {
        $user = Auth::user();
        $this->user_id = $user->id;
    }

    public function render()
    {
        return view('livewire.user.change-password')->layout('layouts.user-profile');
    }

    public function changePassword(){

            $this->validate([
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => [
                    'required', 
                    'min:8',
                    'regex:/[a-z]/', 
                    'regex:/[A-Z]/', 
                    'regex:/[0-9]/', 
                    'regex:/[@$!%*#?&]/',
                ],
                'new_confirm_password' => ['required', 'same:new_password'],
            ]);
            
            User::find(auth()->user()->id)->update(['password'=> Hash::make($this->new_password)]);
            
            $this->success_message = "User Password Updated Successfully";
        
    }
}
