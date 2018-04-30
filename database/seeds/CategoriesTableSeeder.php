<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
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
                'name' => 'Điện thoại',
                'slug' => str_slug('Điện thoại'),
            ],
            [
                'name' => 'Laptop',
                'slug' => str_slug('Laptop'),
            ],
            [
                'name' => 'Phụ kiện',
                'slug' => str_slug('Phụ kiện'),
            ],
            [
                'name' => 'Iphone',
                'slug' => str_slug('Iphone'),
                'parent_id' => 1

            ],
            [
                'name' => 'SamSung',
                'slug' => str_slug('SamSung'),
                'parent_id' => 1
            ],
            [
                'name' => 'Oppo',
                'slug' => str_slug('Oppo'),
                'parent_id' => 1
            ],
            [
                'name' => 'Nokia',
                'slug' => str_slug('Nokia'),
                'parent_id' => 1
            ],
            [
                'name' => 'Apple',
                'slug' => str_slug('Apple'),
                'parent_id' => 2
            ],
            [
                'name' => 'Dell',
                'slug' => str_slug('Dell'),
                'parent_id' => 2
            ],
            [
                'name' => 'Hp',
                'slug' => str_slug('Hp'),
                'parent_id' => 2
            ],
            [
                'name' => 'Acer',
                'slug' => str_slug('Acer'),
                'parent_id' => 2
            ],
            [
                'name' => 'Chuột máy tính',
                'slug' => str_slug('Chuột máy tính'),
                'parent_id' => 3
            ],[
                'name' => 'Bàn phím ',
                'slug' => str_slug('Bàn phím'),
                'parent_id' => 3
            ],[
                'name' => 'Ổ cứng',
                'slug' => str_slug('Ổ cứng'),
                'parent_id' => 3
            ],[
                'name' => 'USB',
                'slug' => str_slug('USB'),
                'parent_id' => 3
            ],
        ];
        foreach($data as $cate){
            Category::create($cate);
        }
    }
}
