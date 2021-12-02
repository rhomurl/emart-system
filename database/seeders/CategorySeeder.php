<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'id' => 1,
                'name' => 'Fruits and Vegetables',
                'slug' => 'fruits-and-vegetables',
                'type' => 'Perishable'
            ],
            [
                'id' => 2,
                'name' => 'Canned Goods',
                'slug' => 'canned-goods',
                'type' => 'Non-perishable'
            ],
            [
                'id' => 3,
                'name' => 'Frozen Foods',
                'slug' => 'frozen-foods',
                'type' => 'Perishable'
            ],
            [
                'id' => 4,
                'name' => 'Rice',
                'slug' => 'rice',
                'type' => 'Non-perishable'
            ],
            [
                'id' => 5,
                'name' => 'Instant Noodles',
                'slug' => 'lnstant-noodles',
                'type' => 'Non-perishable'
            ],
            [
                'id' => 6,
                'name' => 'Alcoholic Beverages',
                'slug' => 'alcoholic-beverages',
                'type' => 'Non-perishable'
            ],
            [
                'id' => 7,
                'name' => 'Biscuit and Crackers',
                'slug' => 'biscuit-crackers',
                'type' => 'Non-perishable'
                
            ],
            [
                'id' => 8,
                'name' => 'Dairy Products',
                'slug' => 'dairy-products',
                'type' => 'Perishable'
            ],
            [
                'id' => 9,
                'name' => 'Hygiene',
                'slug' => 'hygiene',
                'type' => 'Non-perishable'
            ],
            [
                'id' => 10,
                'name' => 'Fish and Meat',
                'slug' => 'fish-and-meat',
                'type' => 'Perishable'
            ],   
        ];

        Category::insert($category);
    }
}
