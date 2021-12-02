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
                'zip' => '4200'
            ],
            [
                'id' => 41004,
                'name' => 'Balete',
                'zip' => '4219'
            ],
            [
                'id' => 41009,
                'name' => 'Cuenca',
                'zip' => '4222'
            ],
            [
                'id' => 41022,
                'name' => 'San Jose',
                'zip' => '4227'
            ],
        ];
        

        $barangay = [
            [
                "city_id" => "41005",
                "name" => "Banaba Kanluran/West",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41005",
                "name" => "Banaba Silangan/East",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41005",
                "name" => "Banaba South",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41005",
                "name" => "Banaba Center",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41005",
                "name" => "Sitio Pulo, Balagtas",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41022",
                "name" => "Natunuan Talipapa",
                "shippingfee" => 55,
            ],
            [
                "city_id" => "41009",
                "name" => "Bungahan",
                "shippingfee" => 55,
            ],
            [
                "city_id" => "41009",
                "name" => "Cuenca Bayan",
                "shippingfee" => 55,
            ],
            [
                "city_id" => "41004",
                "name" => "Sitio 1 Bulihan",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41004",
                "name" => "Sitio 2 Sahingan",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41004",
                "name" => "Sitio 3",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41004",
                "name" => "Sitio 4",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41004",
                "name" => "Sitio 5",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41004",
                "name" => "Sitio 6",
                "shippingfee" => 0
            ],
            [
                "city_id" => "41004",
                "name" => "Sitio 7 Relocation Site",
                "shippingfee" => 0
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
