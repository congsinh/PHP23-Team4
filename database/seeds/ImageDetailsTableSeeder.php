<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ImageDetail;
class ImageDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
        $product = Product::pluck('id')->toArray();
        for($i = 0; $i < 90; $i++){
            ImageDetail::create([
                'image_detail' => $faker->imageUrl(300,300,null,true),
                'product_id' =>$product[array_rand($product)],
            ]);
        }
    }
}
