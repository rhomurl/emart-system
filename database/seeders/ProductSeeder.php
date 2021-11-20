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
        $product = [
            [
                'name' => 'Fresh Carrots 500g',
                'slug' => 'fresh-carrots-500g',
                'description' => 'This is fresh carrot',
                'selling_price' => '60',
                'quantity' => '10',
                'image' => 'images/products/carrots.jpg',
                'category_id' => '1',
                'brand_id' => '1',
            ],

            [
                'name' => 'Dinurado Rice',
                'slug' => 'dinurado-rice',
                'description' => 'This is rice',
                'selling_price' => '55',
                'quantity' => '20',
                'image' => 'images/products/dnd-rice.jpg',
                'category_id' => '4',
                'brand_id' => '2',
            ],

            [
                'name' => 'Egg (5 Pieces)',
                'slug' => 'egg-5-pieces',
                'description' => 'This is egg',
                'selling_price' => '20',
                'quantity' => '5',
                'image' => 'images/products/egg.jpg',
                'category_id' => '8',
                'brand_id' => '1',
            ],

            [
                'name' => 'Milagrosa Rice',
                'slug' => 'milagrosa-rice',
                'description' => 'This is rice',
                'selling_price' => '57',
                'quantity' => '16',
                'image' => 'images/products/pure-milagrosa.jpg',
                'category_id' => '4',
                'brand_id' => '3',
            ],

            [
                'name' => 'Nissin Cup Noodles (Seafood)',
                'slug' => 'nissin-cup-noodles-seafood',
                'description' => 'This is cup noodles',
                'selling_price' => '17',
                'quantity' => '50',
                'image' => 'images/products/seafood-cup-noodles.jpg',
                'category_id' => '5',
                'brand_id' => '4',
            ],
            
            [
                'name' => 'Colgate Toothpaste',
                'slug' => 'colgate-toothpaste',
                'description' => 'This is colgate',
                'selling_price' => '6',
                'quantity' => '10',
                'image' => 'images/products/1.jpg',
                'category_id' => '9',
                'brand_id' => '5',
            ],
            [
                "name" => "Payless Xtra Big Pancit  Canton Xtra Hot",
                "slug" => "payless-xtra-big-pancit-canton-xtra-hot",
                "description" => "Payless Xtra Big pancit Canton xtra hot are a bit larger than Lucky Me. It is a satisfying instant noodles in one etra big pouch that is equivalent to two regular packs",
                "selling_price" => "20",
                "quantity" => "100",
                "image" => "images/products/pl-xtra-big-pancit.c-xtra-hot-png.png",
                "category_id" => "5",
                "brand_id" => "8"
            ],
            [
                "name" => "Payless Xtra Big Pancit  Canton Chili Mansi",
                "slug" => "payless-xtra-big-pancit-canton-chili-mansi",
                "description" => "Payless Xtra Big pancit Canton chilimansi are a bit larger than Lucky Me. It is a satisfying instant noodles in one etra big pouch that is equivalent to two regular packs",
                "selling_price" => "20",
                "quantity" => "100",
                "image" => "images/products/pl-xtra-big-pancit.c-chili-mansi-png.png",
                "category_id" => "5",
                "brand_id" => "8"
            ],
            [
                "name" => "Payless Xtra Big Pancit Canton Kalamansi",
                "slug" => "payless-xtra-big-pancit-canton-kalamansi",
                "description" => "Payless Xtra Big pancit Canton kalamansi are a bit larger than Lucky Me. It is a satisfying instant noodles in one extra big pouch that is equivalent to two regular packs",
                "selling_price" => "20",
                "quantity" => "100",
                "image" => "images/products/pl-xtra-big-pancit.c-kalamansi-png.png",
                "category_id" => "5",
                "brand_id" => "8"
            ],
            [
                "name" => "Uni-President Ho-Mi Instant Mami Noodles Beef",
                "slug" => "Uni-president-ho-mi-instant-mami-noodles-beef",
                "description" => "Uni- president instant noodles beef flavors is with its signature firm noodles texture. It's uniquely authentic chinese soup taste.",
                "selling_price" => "10",
                "quantity" => "100",
                "image" => "images/products/up-ho-mi-noodles-beef-png.png",
                "category_id" => "5",
                "brand_id" => "9"
            ],
            [
                "name" => "Lucky Me Pancit Canton Original",
                "slug" => "lucky-me-pancit-canton-original",
                "description" => "Lucky Me instant pancit canton noodles are delicious and savory. It is  Easy to prepare and very yummy snacks and pang-ulam for Filipinos.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/lm-pancit.c-original-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Pancit Canton Kalamansi",
                "slug" => "lucky-me-pancit-canton-kalamansi",
                "description" => "Lucky Me instant pancit canton noodles are delicious and savory. It is  Easy to prepare and very yummy snacks and pang-ulam for Filipinos.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/lm-pancit.c-kalamansi-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Pancit Canton Sweet & Spicy",
                "slug" => "lucky-me-pancit-canton-sweet-&-spicy",
                "description" => "Lucky Me instant pancit canton noodles are delicious and savory. It is  Easy to prepare and very yummy snacks and pang-ulam for Filipinos.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/lm-pancit.c-sweet-&-spicy-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Pancit Canton Chilimansi",
                "slug" => "lucky-me-pancit-canton-chilimansi",
                "description" => "Lucky Me instant pancit canton noodles are delicious and savory. It is  Easy to prepare and very yummy snacks and pang-ulam for Filipinos.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/lm-pancit.c-chili-mansi-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Pancit Canton Extra Hot Chili",
                "slug" => "lucky-me-pancit-canton-extra-hot-chili",
                "description" => "Lucky Me instant pancit canton noodles are delicious and savory. It is  Easy to prepare and very yummy snacks and pang-ulam for Filipinos.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/lm-pancit.c-extra-hot-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Instant Noodles Chicken na Chicken",
                "slug" => "lucky-me-instant-noodles-chicken-na-chicken",
                "description" => "Lucky Me instant pancit canton noodles are delicious and savory. It is  Easy to prepare and very yummy snacks and pang-ulam for Filipinos.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/lm-noodles-chicken-na-chicken-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Instant Noodles Beef na Beef",
                "slug" => "lucky-me-instant-noodles-beef-na-beef",
                "description" => "Lucky Me instant pancit canton noodles are delicious and savory. It is  Easy to prepare and very yummy snacks and pang-ulam for Filipinos.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/lm-noodles-beef-na-beef-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Instant Noodles Spicy Labuyo Beef",
                "slug" => "lucky-me-instant-noodles-spicy-labuyo-beef",
                "description" => "Lucky Me instant pancit canton noodles are delicious and savory. It is  Easy to prepare and very yummy snacks and pang-ulam for Filipinos.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/lm-noodles-spicy-beef-labuyo-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Nissin Ramen Instant Noodles Sea Food",
                "slug" => "nissin-ramen-instant-noodles-sea-food",
                "description" => "Nissin ramen instant noodles are authentic and rich tasting Japanese noodles with real seafood or meat bits and vegetables. Nissin Ramen is all time favorite too.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/nr-noodles-sea-food-png.png",
                "category_id" => "5",
                "brand_id" => "4"
            ],
            [
                "name" => "Nissin Ramen Instant Noodles Beef",
                "slug" => "nissin-ramen-instant-noodles-beef",
                "description" => "Nissin ramen instant noodles are authentic and rich tasting Japanese noodles with real seafood or meat bits and vegetables. Nissin Ramen is all time favorite too.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/nr-noodles-beef-png.png",
                "category_id" => "5",
                "brand_id" => "4"
            ],
            [
                "name" => "Nissin Ramen Instant Noodles Spicy Sea Food",
                "slug" => "nissin-ramen-instant-noodles-spicy-sea-food",
                "description" => "Nissin ramen instant noodles are authentic and rich tasting Japanese noodles with real seafood or meat bits and vegetables. Nissin Ramen is all time favorite too.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/nr-spicy-sea-food-png.png",
                "category_id" => "5",
                "brand_id" => "4"
            ],
            [
                "name" => "Nissin Ramen Instant Noodles Spicy Hot Beef",
                "slug" => "nissin-ramen-instant-noodles-spicy-hot-beef",
                "description" => "Nissin ramen instant noodles are authentic and rich tasting Japanese noodles with real seafood or meat bits and vegetables. Nissin Ramen is all time favorite too.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/nr-noodles-spicy-hot-beef-png.png",
                "category_id" => "5",
                "brand_id" => "4"
            ],
            [
                "name" => "Nissin Ramen Instant Noodles Chicken",
                "slug" => "nissin-ramen-instant-noodles-chicken",
                "description" => "Nissin ramen instant noodles are authentic and rich tasting Japanese noodles with real seafood or meat bits and vegetables. Nissin Ramen is all time favorite too.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/nr-noodles-chicken-png.png",
                "category_id" => "5",
                "brand_id" => "4"
            ],
            [
                "name" => "Nissin Ramen Instant Noodle Shrimp",
                "slug" => "nissin-ramen-instant-noodles-shrimp",
                "description" => "Nissin ramen instant noodles are authentic and rich tasting Japanese noodles with real seafood or meat bits and vegetables. Nissin Ramen is all time favorite too.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/nr-noodles-shrimp-png.png",
                "category_id" => "5",
                "brand_id" => "4"
            ],
            [
                "name" => "Nissin Cup Noodles  Sea Food 40g",
                "slug" => "nissin-cup-noodles-sea-food-40g",
                "description" => "Nissin ramen instant noodles are authentic and rich tasting Japanese noodles with real seafood or meat bits and vegetables. Nissin Ramen is all time favorite too.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/ns-c.noodles-sea-food-40g-png.png",
                "category_id" => "5",
                "brand_id" => "4"
            ],
            [
                "name" => "Nissin Cup Noodles Batchoy 40g ",
                "slug" => "nissin-cup-noodles-batchoy-40g",
                "description" => "Nissin ramen instant noodles are authentic and rich tasting Japanese noodles with real seafood or meat bits and vegetables. Nissin Ramen is all time favorite too.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/ns-c.noodles-batchoy-40g-png.png",
                "category_id" => "5",
                "brand_id" => "4"
            ],
            [
                "name" => "Nissin Cup Noodles Spicy Sea Food 40g",
                "slug" => "nissin-cup-noodles-spicy-sea-food-40g",
                "description" => "Nissin ramen instant noodles are authentic and rich tasting Japanese noodles with real seafood or meat bits and vegetables. Nissin Ramen is all time favorite too.",
                "selling_price" => "15",
                "quantity" => "100",
                "image" => "images/products/ns-c.noodles-spicy-sea-food-40g-png.png",
                "category_id" => "5",
                "brand_id" => "4"
            ],
            [
                "name" => "Lucky Me Cup Noodles Chicken Sotanghon 40g",
                "slug" => "lucky-me-cup-noodles-chicken-sotanghon-40g",
                "description" => "Lucky Me Cup Noodles goodness that captures the true taste of chicken, pork and beef. With lucky me cup noodles you satisfy your cravings everywhere and anywhere. ",
                "selling_price" => "25",
                "quantity" => "100",
                "image" => "images/products/lm-c.noodles-chicken-sotanghon-40g-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Cup Noodles La Paz Batchoy 40g",
                "slug" => "lucky-me-cup-noodles-la-paz-batchoy-40g",
                "description" => "Lucky Me Cup Noodles goodness that captures the true taste of chicken, pork and beef. With lucky me cup noodles you satisfy your cravings everywhere and anywhere. ",
                "selling_price" => "25",
                "quantity" => "100",
                "image" => "images/products/lm-c.noodles-la-paz-batchoy-40g-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Cup Noodles SeaFood 40g",
                "slug" => "lucky-me-cuo-noodles-sea-food-40g",
                "description" => "Lucky Me Cup Noodles goodness that captures the true taste of chicken, pork and beef. With lucky me cup noodles you satisfy your cravings everywhere and anywhere.",
                "selling_price" => "25",
                "quantity" => "100",
                "image" => "images/products/lm-c.noodles-sea-food-40g-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky Me Cup Noodles Bulalo 40g",
                "slug" => "lucky-me-cup-noodles-bulalo-40g",
                "description" => "Lucky Me Cup Noodles goodness that captures the true taste of chicken, pork and beef. With lucky me cup noodles you satisfy your cravings everywhere and anywhere.",
                "selling_price" => "25",
                "quantity" => "100",
                "image" => "images/products/lm-c.noodles-bulalo-40g-png.png",
                "category_id" => "5",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky 7 Carne Norte 150g",
                "slug" => "lucky-7carne-norte-150g",
                "description" => "Lucky 7 Carne Norte is deliciously sauteed, tasty, and aromatic.  Lucky 7  is  the most affordable Carne Norte in the market. ",
                "selling_price" => "25",
                "quantity" => "80",
                "image" => "images/products/l7-carne-norte-150g-png.png",
                "category_id" => "2",
                "brand_id" => "10"
            ],
            [
                "name" => "Lucky 7 Carne Norte 100g",
                "slug" => "lucky-7-carne-norte-100g",
                "description" => "Lucky 7 Carne Norte is deliciously sauteed, tasty, and aromatic.  Lucky 7  is  the most affordable Carne Norte in the market. ",
                "selling_price" => "20",
                "quantity" => "80",
                "image" => "images/products/l7-carne-norte-100g-png.png",
                "category_id" => "2",
                "brand_id" => "10"
            ],
            [
                "name" => "Argentina Corned Beef 260g",
                "slug" => "argentina-corned-beef-260g",
                "description" => "Argentina Corned Beef the No.1 Corned Beef brand. It's filling deliciously flavorful, has meaty strands, it is packed with protein made with 100% pure meat  and very healthy.",
                "selling_price" => "65",
                "quantity" => "80",
                "image" => "images/products/argentina-corned-beef-260g-png.png",
                "category_id" => "2",
                "brand_id" => "7"
            ],
            [
                "name" => "Argentina Corned Beef 175g",
                "slug" => "argentina-corned-beef-175g",
                "description" => "Argentina Corned Beef the No.1 Corned Beef brand. It's filling deliciously flavorful, has meaty strands, it is packed with protein made with 100%  pure meat and very healthy.",
                "selling_price" => "45",
                "quantity" => "80",
                "image" => "images/products/argentina-corned-beef-175g-png.png",
                "category_id" => "2",
                "brand_id" => "7"
            ],
            [
                "name" => "Argentina Corned Beef 150g",
                "slug" => "argentina-corned-beef-150g",
                "description" => "Argentina Corned Beef the No.1 Corned Beef brand. It's filling deliciously flavorful, has meaty strands, it is packed with protein made with 100% pure meat  and very healthy.",
                "selling_price" => "40",
                "quantity" => "80",
                "image" => "images/products/argentina-corned-beef-150g-png.png",
                "category_id" => "2",
                "brand_id" => "7"
            ],
            [
                "name" => "Argentina Corned Beef 100g",
                "slug" => "argentina-corned-beef-100g",
                "description" => "Argentina Corned Beef the No.1 Corned Beef brand. It's filling deliciously flavorful, has meaty strands, it is packed with protein made with 100%  pure meat and very healthy.",
                "selling_price" => "25",
                "quantity" => "80",
                "image" => "images/products/argentina-corned-beef-100g-png.png",
                "category_id" => "2",
                "brand_id" => "7"
            ],
            [
                "name" => "Argentina Giniling Ground Pork 250g",
                "slug" => "argentina-giniling-ground-pork-250g",
                "description" => "Argentina is ready-to-use Giniling ground Pork.  It's filling deliciously falvorful, has meaty strands, it is packed with protein made with 100% pure meat and very Healthy",
                "selling_price" => "45",
                "quantity" => "80",
                "image" => "images/products/argentina-giniling-250g-png.png",
                "category_id" => "2",
                "brand_id" => "7"
            ],
            [
                "name" => "Argentina Giniling Ground Pork 100g",
                "slug" => "argentina-giniling-ground-pork-100g",
                "description" => "Argentina is ready-to-use Giniling ground Pork.  It's filling deliciously falvorful, has meaty strands, it is packed with protein made with 100% pure meat and very Healthy",
                "selling_price" => "30",
                "quantity" => "80",
                "image" => "images/products/argentina-giniling-100g-png.png",
                "category_id" => "2",
                "brand_id" => "7"
            ],
            [
                "name" => "Argentina Meat Loaf 250g",
                "slug" => "argentina-meat-loaf-250g",
                "description" => "Argentina Meat Loaf is the N0.1 Meat Loaf. It is made up of premium beef and pork and blended with the right spices.",
                "selling_price" => "40",
                "quantity" => "80",
                "image" => "images/products/argentina-meat-loaf-250g-png.png",
                "category_id" => "2",
                "brand_id" => "7"
            ],
            [
                "name" => "Argentina Meat Loaf 170g",
                "slug" => "argentina-meat-loaf-170g",
                "description" => "Argentina Meat Loaf is the N0.1 Meat Loaf. It is made up of premium beef and pork and blended with the right spices.",
                "selling_price" => "35",
                "quantity" => "80",
                "image" => "images/products/argentina-meat-loaf-170g-png.png",
                "category_id" => "2",
                "brand_id" => "7"
            ],
            [
                "name" => "Argentina Meat Loaf 100g",
                "slug" => "argentina-meat-loaf-100g",
                "description" => "Argentina Meat Loaf is the N0.1 Meat Loaf. It is made up of premium beef and pork and blended with the right spices.",
                "selling_price" => "25",
                "quantity" => "80",
                "image" => "images/products/argentina-meat-loaf-100g-png.png",
                "category_id" => "2",
                "brand_id" => "7"
            ],
            [
                "name" => "CDO Karne Norte Guisado 260g",
                "slug" => "cdo-karne-norte-guisado-260g",
                "description" => "CDO Karne norte is a Filipino-style corned beef that has a delicious guisado taste. Its fine beef strands make it easy to chew so every mealtime is definitely an enjoyable moment for everyone",
                "selling_price" => "45",
                "quantity" => "80",
                "image" => "images/products/cdo-k.n-guisado-260g-png.png",
                "category_id" => "2",
                "brand_id" => "11"
            ],
            [
                "name" => "CDO Karne Norte Guisado 175g",
                "slug" => "cdo-karne-norte-guisado-175g",
                "description" => "CDO Karne norte is a Filipino-style corned beef that has a delicious guisado taste. Its fine beef strands make it easy to chew so every mealtime is definitely an enjoyable moment for everyone",
                "selling_price" => "35",
                "quantity" => "80",
                "image" => "images/products/cdo-k.n-guisado-175g-png.png",
                "category_id" => "2",
                "brand_id" => "11"
            ],
            [
                "name" => "CDO Karne Norte Guisado 150g",
                "slug" => "cdo-karne-norte-guisado-150g",
                "description" => "CDO Karne norte is a Filipino-style corned beef that has a delicious guisado taste. Its fine beef strands make it easy to chew so every mealtime is definitely an enjoyable moment for everyone",
                "selling_price" => "25",
                "quantity" => "80",
                "image" => "images/products/cdo-k.n-guisado-150g-png.png",
                "category_id" => "2",
                "brand_id" => "11"
            ],
            [
                "name" => "CDO Karne Norte Guisado 100g",
                "slug" => "cdo-karne-norte-guisado-100g",
                "description" => "CDO Karne norte is a Filipino-style corned beef that has a delicious guisado taste. Its fine beef strands make it easy to chew so every mealtime is definitely an enjoyable moment for everyone",
                "selling_price" => "20",
                "quantity" => "80",
                "image" => "images/products/cdo-k.n-guisado-100g-png.png",
                "category_id" => "2",
                "brand_id" => "11"
            ],
            [
                "name" => "PureFoods Star Carne Norte Ginisarap 150g",
                "slug" => "Pure-Foods-star-carne-norte-ginisarap-150g",
                "description" => "PureFoods star corned beef is known for high quality foods for Filipino families. It is easy open can, creamy ans meaty taste.",
                "selling_price" => "30",
                "quantity" => "80",
                "image" => "images/products/pf-star-k.n-ginisarap-150g-png.png",
                "category_id" => "2",
                "brand_id" => "12"
            ],
            [
                "name" => "555 Tuna Afritada 110g",
                "slug" => "555-tuna-afritada-110g",
                "description" => "555 Tuna Flakes in tomato sauce with vegetables. It is ready to eat and offer a rich source of omega 3.",
                "selling_price" => "30",
                "quantity" => "80",
                "image" => "images/products/555-tuna-afritada-110g-png.png",
                "category_id" => "2",
                "brand_id" => "6"
            ],
            [
                "name" => "555 Tuna Caldereta 110g",
                "slug" => "555-tuna-caldereta-110g",
                "description" => "555 Tuna Flakes in tomato sauce with vegetables. De is ready to eat and offer c rich source of omega 3.",
                "selling_price" => "30",
                "quantity" => "80",
                "image" => "images/products/555-tuna-caldereta-110g-png.png",
                "category_id" => "2",
                "brand_id" => "6"
            ],
            [
                "name" => "Century Tuna Flakes in Oil 95g",
                "slug" => "century-tuna-flakes-in-oil-95g",
                "description" => "The Classic all-time Favorite, the original healthy meat. A delicious indulgence.",
                "selling_price" => "25",
                "quantity" => "80",
                "image" => "images/products/century-tuna-Flakes-in-oil-95g-png.png",
                "category_id" => "2",
                "brand_id" => "13"
            ],
            [
                "name" => "Century Tuna Flakes in Oil Hot and Spicy 95g",
                "slug" => "century-tuna-flakes-in-oil-hot-and-spicy-95g",
                "description" => "The Classic all-time Favorite, the original healthy meat. A delicious indulgence.",
                "selling_price" => "25",
                "quantity" => "80",
                "image" => "images/products/century-tuna-flakes-in-oil-hot&spicy-95g-png.png",
                "category_id" => "2",
                "brand_id" => "13"
            ],
            [
                "name" => "Century Tuna Flakes in Oil 155g",
                "slug" => "century-tuna-flakes-in-oil-155g",
                "description" => "The Classic all-time Favorite, the original healthy meat. A delicious indulgence.",
                "selling_price" => "30",
                "quantity" => "80",
                "image" => "images/products/century-tuna-flakes-in-oil-155g-png.png",
                "category_id" => "2",
                "brand_id" => "13"
            ],
            [
                "name" => "Century Tuna Flakes in Oil Hot and Spicy 155g",
                "slug" => "century-tuna-flakes-in-oil-hot-and-spicy-155g",
                "description" => "the Classic all-time Favorite, the original healthy meat. A delicious indulgence.",
                "selling_price" => "30",
                "quantity" => "80",
                "image" => "images/products/century-tuna-flakes-in-oil-h&s-155g-png.png",
                "category_id" => "2",
                "brand_id" => "13"
            ],
            [
                "name" => "555 Corned Sardines 100g",
                "slug" => "555-corned-sardines-100g",
                "description" => "555 sardines is the \"Super Ulam Pinoy\" because it is rich in calcium for stronger bones, protein for muscle building, lycopene for cancer prevention, iodine and vitamin D.",
                "selling_price" => "20",
                "quantity" => "80",
                "image" => "images/products/555-corned-sardines-100g-png.png",
                "category_id" => "2",
                "brand_id" => "6"
            ],
            [
                "name" => "Fresca Corned Tuna 95g",
                "slug" => "fresca-corned-tuna-95g",
                "description" => "Fresca corned tuna savor delectables taste of ypur favorite dish while enjoying the health benefits of fish. It is a very conveient food.",
                "selling_price" => "22",
                "quantity" => "80",
                "image" => "images/products/fresca-corned-tuna-95g-png.png",
                "category_id" => "2",
                "brand_id" => "14"
            ],
            [
                "name" => "San Marino Corned Tuna 180g",
                "slug" => "san-marino-corned-tuna-180g",
                "description" => "San Marino corned tuna is the perfect combination of the delicious taste of corned beef fused with the health benefits off tuna. It have lot of Omega-3.",
                "selling_price" => "43",
                "quantity" => "80",
                "image" => "images/products/sm-corned-tuna-180g-png.png",
                "category_id" => "2",
                "brand_id" => "15"
            ],
            [
                "name" => "San Marino Corned Tuna Chili 180g",
                "slug" => "san-marino-corned-tuna-chili-180g",
                "description" => "San Marino corned tuna is the perfect combination of the delicious taste of corned beef fused with the health benefits off tuna. It have lot of Omega-3.",
                "selling_price" => "45",
                "quantity" => "80",
                "image" => "images/products/sm-corned-tuna-chili-180g-png.png",
                "category_id" => "2",
                "brand_id" => "15"
            ],
            [
                "name" => "San Marino Corned Tuna 100g",
                "slug" => "san-marino-tuna-100g",
                "description" => "San Marino corned tuna is the perfect combination of the delicious taste of corned beef fused with the health benefits off tuna. It have lot of Omega-3.",
                "selling_price" => "27",
                "quantity" => "80",
                "image" => "images/products/sm-corned-tuna-100g-png.png",
                "category_id" => "2",
                "brand_id" => "15"
            ],
            [
                "name" => "San Marino Corned Tuna Chili 100g",
                "slug" => "san-marino-tuna-chili-100g",
                "description" => "San Marino corned tuna is the perfect combination of the delicious taste of corned beef fused with the health benefits off tuna. It have lot of Omega-3.",
                "selling_price" => "30",
                "quantity" => "80",
                "image" => "images/products/sm-corned-tuna-chili-100g-png.png",
                "category_id" => "2",
                "brand_id" => "15"
            ],
            [
                "name" => "WOW Ulam Afritada 155g",
                "slug" => "wow-ulam-afritada-155g",
                "description" => "WOW ulam made with freshly produced sausage in sauces that are inspired by well-loved Filipino dishes sealed in an easy-open can. It is affordable in any market.",
                "selling_price" => "25",
                "quantity" => "80",
                "image" => "images/products/wow-ulam-afritada-155g-png.png",
                "category_id" => "2",
                "brand_id" => "16"
            ],
            [
                "name" => "Master Sardines in Tomato Sauce 425g",
                "slug" => "master-sardines-in-tomato-sauce-425g",
                "description" => "master sardines is mouth-watering, premium sardines dish comes in rich and creamy coconut milk sauce guaranteed to melt in your mouth. Cooked with natural ingredients.",
                "selling_price" => "75",
                "quantity" => "70",
                "image" => "images/products/master-sardines-tomato-sauce-425g-png.png",
                "category_id" => "2",
                "brand_id" => "17"
            ],
            [
                "name" => "SABA MACKEREL 425g",
                "slug" => "saba-mackerel-425g",
                "description" => "Saba mackerel the #1 consistent top player among many sardines brands in the Philippines. Have a good quality and taste.",
                "selling_price" => "100",
                "quantity" => "70",
                "image" => "images/products/saba-mackerel-425g-png.png",
                "category_id" => "2",
                "brand_id" => "18"
            ],
            [
                "name" => "SABA MACKEREL 200g",
                "slug" => "saba-mackerel-200g",
                "description" => "Saba mackerel the #1 consistent top player among many sardines brands in the Philippines. Have a good quality and taste.",
                "selling_price" => "55",
                "quantity" => "70",
                "image" => "images/products/saba-mackerel-200g-png.png",
                "category_id" => "2",
                "brand_id" => "18"
            ],
            [
                "name" => "SABA SQUID in soy sauce 425g",
                "slug" => "saba-squid-in-soy-sauce-425g",
                "description" => "Saba squid in soy sauce the #1 consistent top player among many squid brands in the Philippines. Have a good quality and taste.",
                "selling_price" => "300",
                "quantity" => "70",
                "image" => "images/products/saba-squid-ss-425g-png.png",
                "category_id" => "2",
                "brand_id" => "18"
            ],
            [
                "name" => "PureFoods Corned Beef  380g",
                "slug" => "pure-foods-corned-beef-380g",
                "description" => "PureFoods  corned beef is known for high quality foods for Filipino families. It is easy open can, creamy ans meaty taste.",
                "selling_price" => "200",
                "quantity" => "70",
                "image" => "images/products/pf-corned-beef-380g-png.png",
                "category_id" => "2",
                "brand_id" => "12"
            ],
            [
                "name" => "SPAM 340g",
                "slug" => "spam-340g",
                "description" => "Spam is canned cooked meat product made from ground pork and processed ham. The meat mixure is combined with many preservatives and flavoring agents.",
                "selling_price" => "200",
                "quantity" => "75",
                "image" => "images/products/spam-340g-png.png",
                "category_id" => "2",
                "brand_id" => "19"
            ],
            [
                "name" => " MaLing Pork Luncheon Meat 397g",
                "slug" => "maling-pork-luncheon-meat-397g",
                "description" => "Maling Pork Lunchein meat is tasty and delicious food.  It is much preferred by many  Filipino.",
                "selling_price" => "100",
                "quantity" => "60",
                "image" => "images/products/maling-pork l.m-397g-png.png",
                "category_id" => "2",
                "brand_id" => "20"
            ],
            [
                "name" => "Philips Sausage 70g",
                "slug" => "philips-sausage-70g",
                "description" => " Philips sausage is made from tasty meat and ingredients. It can be cooked as the family's main meal.",
                "selling_price" => "25",
                "quantity" => "80",
                "image" => "images/products/philips-sausage-70g-png.png",
                "category_id" => "2",
                "brand_id" => "21"
            ],
            [
                "name" => "Philips Sausage 114g",
                "slug" => "philips-sausage-114g",
                "description" => "Philips sausage is made from tasty meat and ingredients. It can be cooked as the family's main meal.",
                "selling_price" => "40",
                "quantity" => "80",
                "image" => "images/products/philips-sausage-144g-png.png",
                "category_id" => "2",
                "brand_id" => "21"
            ],
            [
                "name" => "Reno Liver Spread 230g",
                "slug" => "reno-liver-spread-230g",
                "description" => "Reno Liver-spread is a type of pate that is very popular in the Philippines. This canned liver spread made by reno is a breakfast staple with your pandesal bread.",
                "selling_price" => "50",
                "quantity" => "80",
                "image" => "images/products/reno-liver-spread-230g-png.png",
                "category_id" => "2",
                "brand_id" => "22"
            ],
            [
                "name" => "Ligo Sardines in Tomato Sauce 155g",
                "slug" => "ligo-sardines-in-tomato-sauce-155g",
                "description" => "Ligo sardines are packed in tomato sauce that gives a nutritious and healthy combination. It is a more than just of canned foods.",
                "selling_price" => "23",
                "quantity" => "90",
                "image" => "images/products/ligo-sardines-tomato-sauce-155g-png.png",
                "category_id" => "2",
                "brand_id" => "23"
            ],
            [
                "name" => "Ligo Sardines in Tomato Sauce Chili 155g",
                "slug" => "ligo-sardines-tomato-sauce-chili-155g",
                "description" => "Ligo sardines are packed in tomato sauce that gives a nutritious and healthy combination. It is a more than just of canned foods.",
                "selling_price" => "23",
                "quantity" => "90",
                "image" => "images/products/ligo-sardines-tomato-sauce-chili-155g-png.png",
                "category_id" => "2",
                "brand_id" => "23"
            ],
            [
                "name" => "Mega Sardines in Tomato Sauce 155g",
                "slug" => "mega-sardines-in-tomato-sauce-155g",
                "description" => "Mega sardines offers the freshest and most delicious sardines with spicy tomato sauce. Packed within 12 hours from catching to canning.",
                "selling_price" => "23",
                "quantity" => "90",
                "image" => "images/products/mega-sardines-tomato-sauce-155g-png.png",
                "category_id" => "2",
                "brand_id" => "24"
            ],
            [
                "name" => "Mega Sardines in Tomato Sauce Chili 155g",
                "slug" => "mega-sardines-in-tomato-sauce-chili-155g",
                "description" => "Mega sardines offers the freshest and most delicious sardines with spicy tomato sauce. Packed within 12 hours from catching to canning.",
                "selling_price" => "23",
                "quantity" => "90",
                "image" => "images/products/mega-sardines-tomato-sauce-chili-155g-png.png",
                "category_id" => "2",
                "brand_id" => "24"
            ],
            [
                "name" => "Chicken meat Slices Per Kilo ",
                "slug" => "chicken-meat-slices-per-kilo",
                "description" => "Chicken meat is known by its nutritional quality. It contains significant amount of high-quality and easily digestible protein and a low portion of saturated fat.",
                "selling_price" => "170",
                "quantity" => "50",
                "image" => "images/products/chicken-meat-kl-png.png",
                "category_id" => "10",
                "brand_id" => "1"
            ],
            [
                "name" => "Pork meat Slices Per Kilo",
                "slug" => "pork-meat-per-slices-",
                "description" => "Pork meat is mostly made up of protein. Also a good source of vitamins and mineral like phosphorus, selenium, and thiamine.",
                "selling_price" => "240",
                "quantity" => "50",
                "image" => "images/products/pork-meat-kl-png.png",
                "category_id" => "10",
                "brand_id" => "1"
            ],
            [
                "name" => "Hiwas Per Kilo ",
                "slug" => "hiwas-per-kilo",
                "description" => "Hiwas fish is the type of fish usually found in muddy, salty waters and often in deep waters. It is healthy and delicious fish.",
                "selling_price" => "150",
                "quantity" => "20",
                "image" => "images/products/hiwas-fish-kl-png.png",
                "category_id" => "10",
                "brand_id" => "1"
            ],
            [
                "name" => "Tilapia Per Kilo ",
                "slug" => "tilapia-per-kilo",
                "description" => "Tilapia fish is hardy, fast growing fish, that can live up to ten years and reach ten pounds in weight. You can cook yummy  Tilapia in any way.",
                "selling_price" => "160",
                "quantity" => "30",
                "image" => "images/products/tilapia-fish-kl-png.png",
                "category_id" => "10",
                "brand_id" => "1"
            ],
            [
                "name" => "Sayote Per Kilo",
                "slug" => "sayote-per-kilo",
                "description" => "Sayote is a fast-growing climbing vine with characteristics tendrils. It bears small white unisexual flowers and green pear-shaped fruits with furrows.",
                "selling_price" => "50",
                "quantity" => "10",
                "image" => "images/products/sayote-kl-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Pechay Per Bundle",
                "slug" => "pechay-per-bundle",
                "description" => "Pechay is an erect, biennial herb, cultivated as an annual about 15-30 cm tall in vegetative stage. Ovate leaves are arranged spirally and spreading.",
                "selling_price" => "10",
                "quantity" => "20",
                "image" => "images/products/pechay-per-bundle-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Eggplant Per Kilo",
                "slug" => "eggplant-per-bundle",
                "description" => "Eggplant is a tropical, herbaceous, perennial palnt, closely related to tomato, in the family solonaceae which is grown for its edible fruit. It is large, long and with glossy smooth skin and with numerous small seeds.",
                "selling_price" => "50",
                "quantity" => "30",
                "image" => "images/products/eggplant-kl-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Carrots Per Kilo",
                "slug" => "carrots-per-kilo",
                "description" => "Carrot is a root vegetable. Typically orange in color and it is the most cultivated vegetable in the world.",
                "selling_price" => "60",
                "quantity" => "30",
                "image" => "images/products/carrots-kl-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Labanos Per Kilo",
                "slug" => "labanos-per-kilo",
                "description" => "Labanos (white radish) is a coarse, annual crop plant. Roots are fleshy, pungent and variable in size and form.",
                "selling_price" => "50",
                "quantity" => "20",
                "image" => "images/products/labanos-kl-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Pechay Baguio Per Bundle",
                "slug" => "pechay-baguio-per-bundle",
                "description" => "Pechay Baguio or Napa cabbage a form of chinese Cabbage is cultivated for its edible leaves. It is widely grown in eastern asia and is commonly used to make kimchi.",
                "selling_price" => "20",
                "quantity" => "50",
                "image" => "images/products/pechay-baguio-per-bundle-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Bunga ng Malunggay  Per Bundle",
                "slug" => "Bunga-ng-malunggay-per-bundle",
                "description" => "Bunga ng malunggay or fruit of horseradish in english is also kind of herbal medicine. Malunggay is a plant that grows in the tropical climates.",
                "selling_price" => "35",
                "quantity" => "30",
                "image" => "images/products/bunga-ng-malunggay-per-bundle-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Tomato per kilo",
                "slug" => "tomato-per-kilo",
                "description" => "Tomatoes are fruits that are considered vegetables by nutritionists. Botanically, a fruit is a ripened flower ovary and contains seeds.",
                "selling_price" => "30",
                "quantity" => "10",
                "image" => "images/products/tomato-kl-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Red Onion per kilo",
                "slug" => "red-onion-per-kilo",
                "description" => "Red onions are cultivars of the onion, and have purplish-red skin and white flesh tinged with red. They are mostly used in culinary arts, but the skin of the red onions has also been used as a dye.",
                "selling_price" => "60",
                "quantity" => "20",
                "image" => "images/products/red-onion-kl-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Calamansi per kilo",
                "slug" => "calamansi-per-kilo",
                "description" => "Calamansi , also known as calamondin, philippine lime,or Philippine lemon, is an economically important citrus hybrid predominantly cultivated in the Philippines.",
                "selling_price" => "30",
                "quantity" => "10",
                "image" => "images/products/calamansi-kl-png.png",
                "category_id" => "1",
                "brand_id" => "1"
            ],
            [
                "name" => "Titan Pure Milagrosa rice per kilo",
                "slug" => "titan-pure-milagrosa-rice-per-kilo",
                "description" => "Pure Milagrosa rice also known as Thai Jasmine rice or fragrant Thai rice. It is a premium well milled rice and \"malambot\".",
                "selling_price" => "45",
                "quantity" => "30",
                "image" => "images/products/titan-pure-milagrosa-rice-kl-png.png",
                "category_id" => "4",
                "brand_id" => "25"
            ],
            [
                "name" => "DnD milled rice per kilo",
                "slug" => "dnd-milled-rice-per-kilo",
                "description" => "DnD milled rice or Dinurado milled rice are soft, sticky and fragrant. This is 100% Philippine rice variety .",
                "selling_price" => "50",
                "quantity" => "50",
                "image" => "images/products/crystal-dnd-rice-kl-png.png",
                "category_id" => "4",
                "brand_id" => "26"
            ]
        ];

        Product::insert($product);
    }
}
