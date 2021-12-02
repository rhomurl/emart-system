<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $voucher = [
            [
                'name' => 'First Time User',
                'code' => 'FIRST',
                'discount_type' => 'fix',
                'discount_amt' => 100,
                'min_spend' => 1000,
                'usage_qty' => 9999,
            ],
            [
                'name' => 'Big Spender',
                'code' => 'SPEND2500',
                'discount_type' => 'percent',
                'discount_amt' => 5,
                'min_spend' => 2500,
                'usage_qty' => 9999,
            ],
        ];

        Voucher::insert($voucher);
    }
}
