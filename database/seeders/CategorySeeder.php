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
                'slug' => 'fruits-vegetables',
            ],
            [
                'id' => 2,
                'name' => 'Canned Goods',
                'slug' => 'canned-goods',
            ],
            [
                'id' => 3,
                'name' => 'Frozen Foods',
                'slug' => 'frozen-foods',
            ],
            [
                'id' => 4,
                'name' => 'Rice',
                'slug' => 'rice',
            ],
            [
                'id' => 5,
                'name' => 'Instant Noodles',
                'slug' => 'lnstant-noodles',
            ],
            [
                'id' => 6,
                'name' => 'Alcoholic Beverages',
                'slug' => 'alcoholic-beverages',
            ],
            [
                'id' => 7,
                'name' => 'Biscuit and Crackers',
                'slug' => 'biscuit-crackers',
            ],
            [
                'id' => 8,
                'name' => 'Dairy Products',
                'slug' => 'dairy-products',
            ],
            [
                'id' => 9,
                'name' => 'Hygiene',
                'slug' => 'hygiene',
            ],
            
        ];

        Category::insert($category);
    }
}
