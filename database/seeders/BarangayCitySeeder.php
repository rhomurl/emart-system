<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Barangay;
use Illuminate\Database\Seeder;

class BarangayCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        
        $city = [
            [
                'id' => 41005,
                'name' => 'Batangas City',
            ],
            [
                'id' => 2,
                'name' => 'Dinurado',
            ],
        ];
        

        $barangay = [
            [
                'city_id' => 41005,
                'name' => 'Alangilan',
            ],
            [
                'city_id' => 41005,
                'name' => 'Balagtas',
            ],
            [
                'city_id' => 41005,
                'name' => 'Balete',
            ],
            [
                'city_id' => 41005,
                'name' => 'Banaba Center',
            ],
            [
                'city_id' => 41005,
                'name' => 'Banaba Kanluran',
            ],
            [
                'city_id' => 41005,
                'name' => 'Banaba Silangan',
            ],
            [
                'city_id' => 41005,
                'name' => 'Banaba Silangan',
            ],
        ];

        City::insert($city);
        Barangay::insert($barangay);


         /*City::create(['name' => 'Cuenca']);
        Country::create(['name' => 'United Kingdom']);
        Country::create(['name' => 'Germany']);
        */

       /* City::create(['city_id' => 1, 'name' => 'New York']);
        City::create(['country_id' => 1, 'name' => 'Washington']);
        City::create(['country_id' => 2, 'name' => 'London']);
        City::create(['country_id' => 2, 'name' => 'Birmingham']);
        City::create(['country_id' => 3, 'name' => 'Berlin']);
        City::create(['country_id' => 3, 'name' => 'Stuttgart']);
*       */
        
    }
}
