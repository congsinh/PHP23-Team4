<?php

use Illuminate\Database\Seeder;
use App\Models\Manufacturer;
class ManufacturersTableSeeder extends Seeder
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
            Manufacturer::create([
                'name' => $faker->name,
                'slug' => $faker->name
            ]);
        }
    }
}
