<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 4; $i++){
            $faker_name = $faker->unique()->name;
            Category::create([
                'name' => $faker_name,
                'slug' => str_slug($faker_name),
            ]);
        }
        $parent = Category::pluck('id')->toArray();
        for($i = 0; $i < 12; $i++){
            $faker_name = $faker->unique()->name;
            Category::create([
                'name' => $faker_name,
                'slug' => str_slug($faker_name),
                'parent_id' => $parent[array_rand($parent)]
            ]);
        }
    }
}
