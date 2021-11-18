<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = 
        [    
            [
                "name" => "Payless Xtra Big Pancit  Canton Xtra Hot",
                "slug" => "payless-xtra-big-pancit-canton-xtra-hot",
                "description" => "Payless Xtra Big pancit Canton xtra hot are a bit larger than Lucky Me. It is a satisfying instant noodles in one etra big pouch that is equivalent to two regular packs",
                "selling_price" => "20",
                "quantity" => "100",
                "image" => "images/products/pl-xtra-big-pancit.c-xtra-hot-png.png",
                "category_id" => "5",
                "brand_id" => "6"
            ],
            [
                "name" => "Payless Xtra Big Pancit  Canton Chili Mansi",
                "slug" => "payless-xtra-big-pancit-canton-chili-mansi",
                "description" => "Payless Xtra Big pancit Canton chilimansi are a bit larger than Lucky Me. It is a satisfying instant noodles in one etra big pouch that is equivalent to two regular packs",
                "selling_price" => "20",
                "quantity" => "100",
                "image" => "images/products/pl-xtra-big-pancit.c-chili-mansi-png.png",
                "category_id" => "5",
                "brand_id" => "6"
            ],
            [
                "name" => "Payless Xtra Big Pancit Canton Kalamansi",
                "slug" => "payless-xtra-big-pancit-canton-kalamansi",
                "description" => "Payless Xtra Big pancit Canton kalamansi are a bit larger than Lucky Me. It is a satisfying instant noodles in one extra big pouch that is equivalent to two regular packs",
                "selling_price" => "20",
                "quantity" => "100",
                "image" => "images/products/pl-xtra-big-pancit.c-kalamansi-png.png",
                "category_id" => "5",
                "brand_id" => "6"
            ],
        ];
            

        Product::insert($product);
    }
}
