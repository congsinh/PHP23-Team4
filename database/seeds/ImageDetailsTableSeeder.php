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

        $data = [
            [
                'image_detail' => 'product4.jpg',
                'product_id' => 1,
            ], [
                'image_detail' => 'product5.jpg',
                'product_id' => 1,
            ], [
                'image_detail' => 'product6.jpg',
                'product_id' => 1,
            ],[
                'image_detail' => 'product1.png',
                'product_id' => 2,
            ],[
                'image_detail' => 'product2.jpg',
                'product_id' => 2,
            ],[
                'image_detail' => 'product3.jpg',
                'product_id' => 2,
            ],
        ];
        foreach($data as $image){
            ImageDetail::create($image);
        }
    }
}
