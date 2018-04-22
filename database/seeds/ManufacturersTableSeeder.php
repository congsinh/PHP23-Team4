<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Schema::hasTable('manufacturers')) {
            DB::table('manufacturers')->truncate();
        }
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 4; $i++){
            App\Manufacturer::create([
                'name' => $faker->name,
            ]);
        }
    }
}
