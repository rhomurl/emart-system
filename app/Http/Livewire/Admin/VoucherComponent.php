<?php

namespace App\Http\Livewire\Admin;

use App\Models\Voucher;
use Livewire\WithPagination;
use DB;
use Livewire\Component;

class VoucherComponent extends Component
{
    protected $listeners = ['updateComponent' => 'render'];

    use WithPagination;

    public $search = "";

    public function render()
    {
        $vouchers = Voucher::where('name', 'like', '%'.$this->search.'%')->paginate(10);
        return view('livewire.admin.voucher-component', compact('vouchers'))->layout('layouts.admin');
    }

    public function edit($id){
        $this->emit("openModal", "admin.voucher-edit", ["id" => $id]);
    }

    public function confirmDelete($id)
    {

        $this->emit("openModal", "admin.success-modal", ["message" => 'Voucher Deleted Successfully']); 
        Voucher::where('id', $id)->delete();      
    }
}
