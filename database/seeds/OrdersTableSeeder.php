<?php

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
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
        $discount = [5, 10];
        foreach ($users as $user) {
            for ($i = 1; $i < rand(2, 20); $i++) {
                Order::create([
                    'discount' => $discount[array_rand($discount)],
                    'status' => rand(1, 4),
                    'name' => $user->name,
                    'phone' => $user->phone,
                    'address' => $user->address,
                    'note' => $faker->text(100),
                    'user_id' => $user->id,
                    'created_at' => $faker->dateTimeBetween(
                        $startDate = Carbon::now()->startOfYear()->format('Y-m-d H:m-i'),
                        $endDate = Carbon::now()->format('Y-m-d H:m-i'),
                        $timezone = null),
                ]);
            }
        }

        $orders = Order::all();
        foreach ($orders as $order) {
            $product = Product::pluck('id')->toArray();
            DB::table('order_details')->insert([
                [
                    'order_id' => $order->id,
                    'product_id' => $product[array_rand($product)],
                    'quantity' => 1,
                    'created_at' => $order->created_at,
                ]
            ]);
            $total_pay = 0;
            foreach ($order->products as $pro) {
                $total_pay += $pro->price * $pro->pivot->quantity;
            }
            $order->update([
                'total_pay' => $total_pay,
            ]);
        }

    }
}
