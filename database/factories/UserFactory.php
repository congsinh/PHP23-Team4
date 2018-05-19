<?php

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('user123456'),
        'address'=>$faker->address,
        'phone'=>$faker->phoneNumber,
        'created_at'=>$faker->dateTimeBetween('-30 days'),
        'status'=>true,// secret
        'remember_token' => str_random(10),
    ];
});
