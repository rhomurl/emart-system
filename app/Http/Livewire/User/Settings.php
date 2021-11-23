<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Settings extends Component
{
    public $error_message, $success_message; 

    public function mount()
    {
        $user = Auth::user();
        $this->user_id = $user->id;
        $this->firstname = $user->firstname;
        $this->lastname = $user->lastname;
        $this->email = $user->email;


    }

    public function render()
    {
        return view('livewire.user.settings')->layout('layouts.user-profile');
    }

    public function editInfo(){
        try 
        {
            $this->validate([
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
            ]);

            User::updateOrCreate(['id' => $this->user_id],
                ['firstname' => $this->firstname,
                'lastname' => $this->lastname,
                ]);
            
            $this->success_message = "User Info Updated Successfully";
        } catch (\Exception $exception){
            $this->error_message = "Something went wrong";
        }
    }
}
