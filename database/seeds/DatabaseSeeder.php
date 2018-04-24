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
<<<<<<< HEAD



        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call(UsersTableSeeder::class);
=======
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

         $this->call(UsersTableSeeder::class);
>>>>>>> ba912f410a1d457c0bf23c82a8c178e27b51e195
         $this->call(CategoriesTableSeeder::class);
         $this->call(ManufacturersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(ImageDetailsTableSeeder::class);



        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Model::reguard();

    }
}
