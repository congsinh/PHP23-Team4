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
            $data = [
                [
                    'name' => 'Nokia',
                    'slug' => str_slug('Nokia')
                ],[
                    'name' => 'Canon',
                    'slug' => str_slug('Canon')
                ],[
                    'name' => 'Apple',
                    'slug' => str_slug('Apple')
                ],[
                    'name' => 'SamSung',
                    'slug' => str_slug('SamSung')
                ],[
                    'name' => 'HTC',
                    'slug' => str_slug('HTC')
                ],[
                    'name' => 'LG',
                    'slug' => str_slug('LG')
                ]
            ];
        foreach($data as $cate){
            Manufacturer::create($cate);
        }
    }
}
