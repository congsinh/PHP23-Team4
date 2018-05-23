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
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //get all table in database
        $tableNames = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();
        //truncate all table before run seeder
        foreach ($tableNames as $name) {
            if ($name == 'migrations') {
                continue;
            }
            DB::table($name)->truncate();
        }

         $this->call([
             UsersTableSeeder::class,
             CategoriesTableSeeder::class,
             ManufacturersTableSeeder::class,
             ProductsTableSeeder::class,
             ImageDetailsTableSeeder::class,
             OrdersTableSeeder::class,
         ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Model::reguard();

    }
}
