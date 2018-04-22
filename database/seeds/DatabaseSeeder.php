<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // $this->call(UsersTableSeeder::class);

        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
         $this->call(CategoriesTableSeeder::class);
         $this->call(ManufacturersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(ImageDetailsTableSeeder::class);



        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Model::reguard();

    }
}
