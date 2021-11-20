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
                'zip' => '4222'
            ],
        ];
        

        $barangay = [
            [
                "city_id" => "41005",
                "name" => "Alangilan"
            ],
            [
                "city_id" => "41005",
                "name" => "Balagtas"
            ],
            [
                "city_id" => "41005",
                "name" => "Balete"
            ],
            [
                "city_id" => "41005",
                "name" => "Banaba Center"
            ],
            [
                "city_id" => "41005",
                "name" => "Banaba Kanluran"
            ],
            [
                "city_id" => "41005",
                "name" => "Banaba Silangan"
            ],
            [
                "city_id" => "41005",
                "name" => "Banaba Ibaba"
            ],
            [
                "city_id" => "41005",
                "name" => "Bilogo"
            ],
            [
                "city_id" => "41005",
                "name" => "Maapas"
            ],
            [
                "city_id" => "41005",
                "name" => "Bolbok"
            ],
            [
                "city_id" => "41005",
                "name" => "Bukal"
            ],
            [
                "city_id" => "41005",
                "name" => "Calicanto"
            ],
            [
                "city_id" => "41005",
                "name" => "Catandala"
            ],
            [
                "city_id" => "41005",
                "name" => "Concepcion"
            ],
            [
                "city_id" => "41005",
                "name" => "Conde Itaas"
            ],
            [
                "city_id" => "41005",
                "name" => "Conde Labak"
            ],
            [
                "city_id" => "41005",
                "name" => "Cuta"
            ],
            [
                "city_id" => "41005",
                "name" => "Dalig"
            ],
            [
                "city_id" => "41005",
                "name" => "Dela Paz"
            ],
            [
                "city_id" => "41005",
                "name" => "Dela Paz Pulot Aplaya"
            ],
            [
                "city_id" => "41005",
                "name" => "Dela Paz Pulot Itaas"
            ],
            [
                "city_id" => "41005",
                "name" => "Domoclay"
            ],
            [
                "city_id" => "41005",
                "name" => "Dumantay"
            ],
            [
                "city_id" => "41005",
                "name" => "Gulod Itaas"
            ],
            [
                "city_id" => "41005",
                "name" => "Gulod Labak"
            ],
            [
                "city_id" => "41005",
                "name" => "Haligue Kanluran"
            ],
            [
                "city_id" => "41005",
                "name" => "Haligue Silangan"
            ],
            [
                "city_id" => "41005",
                "name" => "Ilihan"
            ],
            [
                "city_id" => "41005",
                "name" => "Kumba"
            ],
            [
                "city_id" => "41005",
                "name" => "Kumintang Ibaba"
            ],
            [
                "city_id" => "41005",
                "name" => "Kumintang Ilaya"
            ],
            [
                "city_id" => "41005",
                "name" => "Libjo"
            ],
            [
                "city_id" => "41005",
                "name" => "Liponpon, Isla Verde"
            ],
            [
                "city_id" => "41005",
                "name" => "Mahabang Dahilig"
            ],
            [
                "city_id" => "41005",
                "name" => "Mahabang Parang"
            ],
            [
                "city_id" => "41005",
                "name" => "Mahacot Silangan"
            ],
            [
                "city_id" => "41005",
                "name" => "Mahacot Kanluran"
            ],
            [
                "city_id" => "41005",
                "name" => "Malalim"
            ],
            [
                "city_id" => "41005",
                "name" => "Malibayo"
            ],
            [
                "city_id" => "41005",
                "name" => "Malitam"
            ],
            [
                "city_id" => "41005",
                "name" => "Maruclap"
            ],
            [
                "city_id" => "41005",
                "name" => "Mabacong"
            ],
            [
                "city_id" => "41005",
                "name" => "Pagkilatan"
            ],
            [
                "city_id" => "41005",
                "name" => "Paharang Kanluran"
            ],
            [
                "city_id" => "41005",
                "name" => "Paharang Silangan"
            ],
            [
                "city_id" => "41005",
                "name" => "Pallocan Silangan"
            ],
            [
                "city_id" => "41005",
                "name" => "Pallocan Kanluran"
            ],
            [
                "city_id" => "41005",
                "name" => "Pinamucan"
            ],
            [
                "city_id" => "41005",
                "name" => "Pinamucan Ibaba"
            ],
            [
                "city_id" => "41005",
                "name" => "Pinamucan Silangan"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 1 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 10 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 11 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 12 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 13 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 14 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 15 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 16 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 17 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 18 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 19 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 2 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 20 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 21 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 22 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 23 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 24 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 3 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 4 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 5 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 6 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 7 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 8 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Barangay 9 (Pob.)"
            ],
            [
                "city_id" => "41005",
                "name" => "Sampaga"
            ],
            [
                "city_id" => "41005",
                "name" => "San Agapito, Isla Verde"
            ],
            [
                "city_id" => "41005",
                "name" => "San Agustin Kanluran, Isla Verde"
            ],
            [
                "city_id" => "41005",
                "name" => "San Agustin Silangan, Isla Verde"
            ],
            [
                "city_id" => "41005",
                "name" => "San Andres, Isla Verde"
            ],
            [
                "city_id" => "41005",
                "name" => "San Antonio, Isla Verde"
            ],
            [
                "city_id" => "41005",
                "name" => "San Isidro"
            ],
            [
                "city_id" => "41005",
                "name" => "San Jose Sico"
            ],
            [
                "city_id" => "41005",
                "name" => "San Miguel"
            ],
            [
                "city_id" => "41005",
                "name" => "San Pedro"
            ],
            [
                "city_id" => "41005",
                "name" => "Santa Clara"
            ],
            [
                "city_id" => "41005",
                "name" => "Santa Rita Aplaya"
            ],
            [
                "city_id" => "41005",
                "name" => "Santa Rita Karsada"
            ],
            [
                "city_id" => "41005",
                "name" => "Santo Domingo"
            ],
            [
                "city_id" => "41005",
                "name" => "Santo Niño"
            ],
            [
                "city_id" => "41005",
                "name" => "Simlong"
            ],
            [
                "city_id" => "41005",
                "name" => "Sirang Lupa"
            ],
            [
                "city_id" => "41005",
                "name" => "Sorosoro Ibaba"
            ],
            [
                "city_id" => "41005",
                "name" => "Sorosoro Ilaya"
            ],
            [
                "city_id" => "41005",
                "name" => "Sorosoro Karsada"
            ],
            [
                "city_id" => "41005",
                "name" => "Tabangao Aplaya"
            ],
            [
                "city_id" => "41005",
                "name" => "Tabangao Ambulong"
            ],
            [
                "city_id" => "41005",
                "name" => "Tabangao Dao"
            ],
            [
                "city_id" => "41005",
                "name" => "Talahib Pandayan"
            ],
            [
                "city_id" => "41005",
                "name" => "Talahib Payapa"
            ],
            [
                "city_id" => "41005",
                "name" => "Talumpok Kanluran"
            ],
            [
                "city_id" => "41005",
                "name" => "Talumpok Silangan"
            ],
            [
                "city_id" => "41005",
                "name" => "Tinga Itaas"
            ],
            [
                "city_id" => "41005",
                "name" => "Tinga Labak"
            ],
            [
                "city_id" => "41005",
                "name" => "Tulo"
            ],
            [
                "city_id" => "41005",
                "name" => "Wawa"
            ],
            [
                "city_id" => "41004",
                "name" => "Alangilan"
            ],
            [
                "city_id" => "41004",
                "name" => "Calawit"
            ],
            [
                "city_id" => "41004",
                "name" => "Looc"
            ],
            [
                "city_id" => "41004",
                "name" => "Magapi"
            ],
            [
                "city_id" => "41004",
                "name" => "Makina"
            ],
            [
                "city_id" => "41004",
                "name" => "Malabanan"
            ],
            [
                "city_id" => "41004",
                "name" => "Paligawan"
            ],
            [
                "city_id" => "41004",
                "name" => "Palsara"
            ],
            [
                "city_id" => "41004",
                "name" => "Poblacion"
            ],
            [
                "city_id" => "41004",
                "name" => "Sala"
            ],
            [
                "city_id" => "41004",
                "name" => "Sampalocan"
            ],
            [
                "city_id" => "41004",
                "name" => "Solis"
            ],
            [
                "city_id" => "41004",
                "name" => "San Sebastian"
            ],
            [
                "city_id" => "41009",
                "name" => "Balagbag"
            ],
            [
                "city_id" => "41009",
                "name" => "Bungahan"
            ],
            [
                "city_id" => "41009",
                "name" => "Calumayin"
            ],
            [
                "city_id" => "41009",
                "name" => "Dalipit East"
            ],
            [
                "city_id" => "41009",
                "name" => "Dalipit West"
            ],
            [
                "city_id" => "41009",
                "name" => "Dita"
            ],
            [
                "city_id" => "41009",
                "name" => "Don Juan"
            ],
            [
                "city_id" => "41009",
                "name" => "Emmanuel"
            ],
            [
                "city_id" => "41009",
                "name" => "Ibabao"
            ],
            [
                "city_id" => "41009",
                "name" => "Labac"
            ],
            [
                "city_id" => "41009",
                "name" => "Pinagkaisahan"
            ],
            [
                "city_id" => "41009",
                "name" => "San Felipe"
            ],
            [
                "city_id" => "41009",
                "name" => "San Isidro"
            ],
            [
                "city_id" => "41009",
                "name" => "Barangay 1 (Pob.)"
            ],
            [
                "city_id" => "41009",
                "name" => "Barangay 2 (Pob.)"
            ],
            [
                "city_id" => "41009",
                "name" => "Barangay 3 (Pob.)"
            ],
            [
                "city_id" => "41009",
                "name" => "Barangay 4 (Pob.)"
            ],
            [
                "city_id" => "41009",
                "name" => "Barangay 5 (Pob.)"
            ],
            [
                "city_id" => "41009",
                "name" => "Barangay 6 (Pob.)"
            ],
            [
                "city_id" => "41009",
                "name" => "Barangay 7 (Pob.)"
            ],
            [
                "city_id" => "41009",
                "name" => "Barangay 8 (Pob.)"
            ],
            [
                "city_id" => "41022",
                "name" => "Aguila"
            ],
            [
                "city_id" => "41022",
                "name" => "Anus"
            ],
            [
                "city_id" => "41022",
                "name" => "Aya"
            ],
            [
                "city_id" => "41022",
                "name" => "Bagong Pook"
            ],
            [
                "city_id" => "41022",
                "name" => "Balagtasin"
            ],
            [
                "city_id" => "41022",
                "name" => "Balagtasin I"
            ],
            [
                "city_id" => "41022",
                "name" => "Banaybanay I"
            ],
            [
                "city_id" => "41022",
                "name" => "Banaybanay II"
            ],
            [
                "city_id" => "41022",
                "name" => "Bigain I"
            ],
            [
                "city_id" => "41022",
                "name" => "Bigain II"
            ],
            [
                "city_id" => "41022",
                "name" => "Calansayan"
            ],
            [
                "city_id" => "41022",
                "name" => "Dagatan"
            ],
            [
                "city_id" => "41022",
                "name" => "Don Luis"
            ],
            [
                "city_id" => "41022",
                "name" => "Galamay-Amo"
            ],
            [
                "city_id" => "41022",
                "name" => "Lalayat"
            ],
            [
                "city_id" => "41022",
                "name" => "Lapolapo I"
            ],
            [
                "city_id" => "41022",
                "name" => "Lapolapo II"
            ],
            [
                "city_id" => "41022",
                "name" => "Lepute"
            ],
            [
                "city_id" => "41022",
                "name" => "Lumil"
            ],
            [
                "city_id" => "41022",
                "name" => "Natunuan"
            ],
            [
                "city_id" => "41022",
                "name" => "Palanca"
            ],
            [
                "city_id" => "41022",
                "name" => "Pinagtung-Ulan"
            ],
            [
                "city_id" => "41022",
                "name" => "Poblacion Barangay I"
            ],
            [
                "city_id" => "41022",
                "name" => "Poblacion Barangay II"
            ],
            [
                "city_id" => "41022",
                "name" => "Poblacion Barangay III"
            ],
            [
                "city_id" => "41022",
                "name" => "Poblacion Barangay IV"
            ],
            [
                "city_id" => "41022",
                "name" => "Sabang"
            ],
            [
                "city_id" => "41022",
                "name" => "Salaban"
            ],
            [
                "city_id" => "41022",
                "name" => "Santo Cristo"
            ],
            [
                "city_id" => "41022",
                "name" => "Mojon-Tampoy"
            ],
            [
                "city_id" => "41022",
                "name" => "Taysan"
            ],
            [
                "city_id" => "41022",
                "name" => "Tugtug"
            ],
            [
                "city_id" => "41022",
                "name" => "Bigain South"
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
