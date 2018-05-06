<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $cate = Category::where('parent_id','<>','null')->pluck('id')->toArray();
        $manufacturer = Manufacturer::pluck('id')->toArray();
        $price = range(149000,59999000,50000);
        for($i = 0; $i < 200; $i++){
            $faker_name = $faker->unique()->name;
            $arr = [$faker->name=>$faker->title];
            Product::create([
                'name' => $faker->name,
                'slug' => str_slug($faker_name),
                'description' => $faker->sentence(10,true),
                'quantity_store' => rand(1,20),
                'price'=>$price[rand(0,count($price)-1)],
                'rating' => $faker->numberBetween(1,5),
                'sales' => $faker->randomNumber(2),
                'category_id' => $cate[array_rand($cate)],
                'manufacture_id' => $manufacturer[array_rand($manufacturer)],
                'configuration' => [
                    $faker->title=>$faker->name,
                    $faker->title=>$faker->name,
                    $faker->title=>$faker->name,
                    $faker->title=>$faker->name,
                    $faker->title=>$faker->name,
                    $faker->title=>$faker->name
                ],
            ]);
        }
    }
}
