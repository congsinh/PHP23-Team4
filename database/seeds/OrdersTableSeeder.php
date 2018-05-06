<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $users = \App\User::all();
        $discount = [5,10];
        $total_pay = range(149000,59999000,50000);
        foreach( $users as $user ){
            for( $i = 1; $i < rand(2,5); $i++ ){
                Order::create([
                    'discount' => $discount[array_rand($discount)],
                    'status' => rand(1,3),
                    'name' => $user->name,
                    'phone' => $user->phone,
                    'address' => $user->address,
                    'total_pay' => $total_pay[array_rand($total_pay)],
                    'note' => $faker->text(100),
                    'user_id' => $user->id,
                    'created_at' => $faker->dateTimeBetween($startDate = '-30 days', $endDate = 'now', $timezone = null),
                ]);
            }
        }

        $orders = Order::all();
        $product = Product::count();
        foreach($orders as $order){
            for( $i = 1; $i < rand(2,5); $i++ ) {
                DB::table('order_details')->insert([
                    [
                        'order_id' => $order->id,
                        'product_id' => $faker->unique()->numberBetween(1,$product),
                        'quantity' => 1,
                    ]
                ]);
            }
        }
    }
}
