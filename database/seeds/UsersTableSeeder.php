<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'address'=>'admin',
                'phone'=>'',
                'status'=>true,
                'is_admin'=>1,
                'remember_token' => str_random(10)],
        ]);
        $users = factory(\App\User::class,30)->create();
    }
}