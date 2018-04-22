<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('categories')) {
            DB::table('categories')->truncate();
        }
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 4; $i++){
            $faker_name = $faker->unique()->name;
            App\Category::create([
                'name' => $faker_name,
                'slug' => str_slug($faker_name),
            ]);
        }
        $parent = App\Category::pluck('id')->toArray();
        for($i = 0; $i < 12; $i++){
            $faker_name = $faker->unique()->name;
            App\Category::create([
                'name' => $faker_name,
                'slug' => str_slug($faker_name),
                'parent_id' => $parent[array_rand($parent)]
            ]);
        }
    }
}
