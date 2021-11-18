<?php

namespace App\Http\Livewire\User;

use App\Models\City;
use App\Models\Barangay;
use App\Models\AddressBook;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddressEdit extends Component
{
    public $barangays;
    public $cities;

    public $entry_company, $entry_firstname, $entry_lastname, $entry_street_address, $entry_phonenumber, $entry_postcode;

    public $barangay;
    public $city;

    public function mount($id)
    {

        $this->address_id = $id;
        $address = AddressBook::findOrFail($this->address_id);
        $this->barangay = $address->barangay->id;
        $this->city = $address->barangay->city->id;
        $this->entry_company = $address->entry_company;
        $this->entry_firstname = $address->entry_firstname;
        $this->entry_lastname = $address->entry_lastname;
        $this->entry_street_address = $address->entry_street_address;
        $this->entry_phonenumber = $address->entry_phonenumber;
        $this->entry_postcode = $address->entry_postcode;

        $this->cities = City::all();
        $this->barangays = collect();


    }

    public function updatedCity($value)
    {
        $this->barangays = Barangay::where('city_id', $value)->get();
        $this->barangay = $this->barangays->first()->id ?? null;
    }

    public function storeAddress()
    {
        $this->validate([
            'entry_company' => 'required|string|max:255',
            'entry_firstname' => 'required|string|max:255',
            'entry_lastname' => 'required|string|max:255',
            'entry_street_address' => 'required|max:255',
            'entry_phonenumber' => 'required|max:15',
            'entry_postcode' => 'required|string|max:5',
        ]);

        AddressBook::create([
            'user_id' => Auth::user()->id,
            'entry_company' => $this->entry_company,
            'entry_firstname' => $this->entry_firstname,
            'entry_lastname' => $this->entry_lastname,
            'entry_street_address' => $this->entry_street_address,
            'barangay_id' => $this->barangay,
            'entry_phonenumber' => $this->entry_phonenumber,
            'entry_postcode' => $this->entry_postcode,
        ]);

        $this->entry_company = '';
        $this->entry_firstname = '';
        $this->entry_lastname = '';
        $this->entry_street_address = '';
        $this->entry_phonenumber = '';
        $this->entry_postcode = '';

        $this->cities = collect();
    }

    public function render()
    {
        $addresses = AddressBook::with('barangay.city')
            ->where('user_id', Auth::id())
            ->latest()
            ->take(5)
            ->get();


        return view('livewire.user.address-edit', compact('addresses'))->layout('layouts.user-profile');
    }
}
