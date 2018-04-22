<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('products')) {
            DB::table('products')->truncate();
        }
        $faker = \Faker\Factory::create();
        $cate = \App\Category::where('parent_id','<>','null')->pluck('id')->toArray();
        $manufacturer = App\Manufacturer::pluck('id')->toArray();
        for($i = 0; $i < 20; $i++){
            $faker_name = $faker->unique()->name;
            $arr = [$faker->name=>$faker->title];
            App\Product::create([
                'name' => $faker->name,
                'slug' => str_slug($faker_name),
                'description' => $faker->sentence(10,true),
                'quantity_store' => 20,
                'price' => $faker->randomNumber(2),
                'rating' => $faker->numberBetween(1,5),
                'sales' => $faker->randomNumber(2),
                'image' => $faker->imageUrl(300,300,null,true),
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
