<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact_number' => ['required', 'string', 'min:7', 'max:15'],
            'password' => $this->passwordRules(),
            'valid_id' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:5120'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $user = User::create([
            'firstname' => $input['first_name'],
            'lastname' => $input['last_name'],
            'email' => $input['email'],
            'contact_number' => $input['contact_number'],
            'password' => Hash::make($input['password']),
        ]);

        if(request()->hasFile('valid_id')){
            $valid_id = request()->file('valid_id')->getClientOriginalName();
            request()->file('valid_id')->storeAs('public/valid_ids', $user->id . '/' . $valid_id, '');
            $user->update(['validid' => $valid_id]);
        }

        $user->assignRole('customer');
        return $user;
    }
}
