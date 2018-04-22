<?php

use Illuminate\Database\Seeder;

class ImageDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('image_details')) {
            DB::table('image_details')->truncate();
        }

        $faker = \Faker\Factory::create();
        $product = App\Product::pluck('id')->toArray();
        for($i = 0; $i < 90; $i++){
            App\ImageDetail::create([
                'image_detail' => $faker->imageUrl(300,300,null,true),
                'product_id' =>$product[array_rand($product)],
            ]);
        }
    }
}
