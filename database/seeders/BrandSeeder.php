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
            [
                'id' => 6,
                'name' => '555',
                'slug' => '555',
            ],
            [
                'id' => 7,
                'name' => 'Argentina',
                'slug' => 'argentina',
            ],
            [
                'id' => 8,
                'name' => 'Payless',
                'slug' => 'payless',
            ],
            [
                'id' => 9,
                'name' => 'Uni President',
                'slug' => 'uni-president',
            ],
            [
                'id' => 10,
                'name' => 'Lucky Me',
                'slug' => 'lucky-me',
            ],
            [
                'id' => 11,
                'name' => 'CDO',
                'slug' => 'cdo',
            ],
            [
                'id' => 12,
                'name' => 'Purefoods',
                'slug' => 'purefoods',
            ],
            [
                'id' => 13,
                'name' => 'Century Tuna',
                'slug' => 'century-tuna',
            ],
            [
                'id' => 14,
                'name' => 'Fresca',
                'slug' => 'fresca',
            ],
            [
                'id' => 15,
                'name' => 'San Marino',
                'slug' => 'san-marino',
            ],
            [
                'id' => 16,
                'name' => 'WOW',
                'slug' => 'wow',
            ],
            [
                'id' => 17,
                'name' => 'Master Sardines',
                'slug' => 'master-sardines',
            ],
            [
                'id' => 18,
                'name' => 'SABA',
                'slug' => 'saba',
            ],
            [
                'id' => 19,
                'name' => 'Spam',
                'slug' => 'spam',
            ],
            [
                'id' => 20,
                'name' => 'Maling',
                'slug' => 'maling',
            ],
            [
                'id' => 21,
                'name' => 'Philips',
                'slug' => 'philips',
            ],
            [
                'id' => 22,
                'name' => 'Reno',
                'slug' => 'reno',
            ],
            [
                'id' => 23,
                'name' => 'Ligo',
                'slug' => 'ligo',
            ],
            [
                'id' => 24,
                'name' => 'Mega',
                'slug' => 'mega',
            ],
            [
                'id' => 25,
                'name' => 'Titan Milagrosa',
                'slug' => 'titan-milagrosa',
            ],
            [
                'id' => 26,
                'name' => 'Crystal',
                'slug' => 'Crystal',
            ],

        ];

        Brand::insert($brand);
    }
}
