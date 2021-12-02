<?php

namespace App\Http\Livewire\Admin;

use App\Models\Voucher;
use LivewireUI\Modal\ModalComponent;

class VoucherModal extends ModalComponent
{
    public $voucher,  
    $voucher_id,
    $name, 
    $code,
    $discount_type,
    $discount_amt,
    $min_spend,
    $quantity;
   

    public function create(){
        $this->validate([
            'name' => 'required|regex:/[a-zA-Z0-9\s]+/|unique:vouchers',
            'code' => 'required|regex:/[a-zA-Z0-9\s]+/|unique:vouchers|max:15',
            'discount_type' => 'required',
            'discount_amt' => 'integer|required',
            'min_spend' => 'integer|required|min:1',
            'quantity' => 'integer|required|min:1'
        ]);

        $voucher = Voucher::updateOrCreate(
            ['id' => $this->voucher_id],
            [
                'name' => $this->name,
                'code' => $this->code,
                'discount_type' => $this->discount_type,
                'discount_amt' => $this->discount_amt,
                'min_spend' => $this->min_spend,
                'usage_qty' => $this->quantity,
            ]
        );
        
        
        $this->emit("openModal", "admin.success-modal", ["message" => $this->voucher_id ? 'Voucher Updated Successfully.' : 'Voucher Added Successfully']);
        $this->resetInputFields();
    }

    private function resetInputFields(){
        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.admin.voucher-modal');
    }
}
