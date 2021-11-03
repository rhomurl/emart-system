<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = [
            [
                'id' => 1,
                'name' => 'No Brand',
                'slug' => 'nobrand',
            ],
            [
                'id' => 2,
                'name' => 'Dinurado',
                'slug' => 'dinurado',
            ],
            [
                'id' => 3,
                'name' => 'Milagrosa',
                'slug' => 'milagrosa',
            ],
            [
                'id' => 4,
                'name' => 'Nissin',
                'slug' => 'nissin',
            ],
            [
                'id' => 5,
                'name' => 'Colgate',
                'slug' => 'colgate',
            ],
        ];

        Brand::insert($brand);
    }
}
