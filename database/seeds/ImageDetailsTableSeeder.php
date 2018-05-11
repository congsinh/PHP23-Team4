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
                'image_detail' => 'product4.png',
                'product_id' => 1,
            ], [
                'image_detail' => 'product5.jpeg',
                'product_id' => 1,
            ], [
                'image_detail' => 'product6.png',
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
            ],[
                'image_detail' => 'product7.jpeg',
                'product_id' => 3,
            ],[
                'image_detail' => 'product8.jpeg',
                'product_id' => 3,
            ],[
                'image_detail' => 'product9.jpeg',
                'product_id' => 3,
            ],[
                'image_detail' => 'product10.png',
                'product_id' => 4,
            ], [
                'image_detail' => 'product11.jpeg',
                'product_id' => 4,
            ], [
                'image_detail' => 'product12.png',
                'product_id' => 4,
            ],[
                'image_detail' => 'product13.jpg',
                'product_id' => 5,
            ],[
                'image_detail' => 'product14.jpg',
                'product_id' => 5,
            ],[
                'image_detail' => 'product15.jpg',
                'product_id' => 5,
            ],[
                'image_detail' => 'product17.jpg',
                'product_id' => 6,
            ],[
                'image_detail' => 'product16.jepg',
                'product_id' => 6,
            ],[
                'image_detail' => 'product18.png',
                'product_id' => 6,
            ],
        ];
        foreach($data as $image){
            ImageDetail::create($image);
        }
    }
}
