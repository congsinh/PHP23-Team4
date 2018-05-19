<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
                'password' => Hash::make('admin123'),
                'address'=>'admin',
                'phone'=>'',
                'status'=>true,
                'is_admin'=>1,
                'remember_token' => str_random(10)
            ],
            [
                'name'=>'customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('customer123'),
                'address'=>'',
                'phone'=>'',
                'status'=>true,
                'is_admin'=>0,
                'remember_token' => str_random(10),
            ]
        ]);
        $users = factory(\App\User::class,100)->create();
    }
}
