<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'products';
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table($tableName)->truncate();

        \Illuminate\Support\Facades\DB::table($tableName)->insert([
            [
                'id' => 1,
                'name' => 'Quần thời trang 01',
                'description' => 'Quần thời trang 01',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 10000,
                'categoryId' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 2,
                'name' => 'Quần thời trang 02',
                'description' => 'Quần thời trang 02',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 10000,
                'categoryId' => 2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 3,
                'name' => 'Quần thời trang 03',
                'description' => 'Quần thời trang 03',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 20000,
                'categoryId' => 3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 4,
                'name' => 'Quần thời trang 04',
                'description' => 'Quần thời trang 04',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 20000,
                'categoryId' => 2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 5,
                'name' => 'Quần thời trang 05',
                'description' => 'Quần thời trang 05',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 30000,
                'categoryId' => 3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 6,
                'name' => 'Quần thời trang 06',
                'description' => 'Quần thời trang 06',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 20000,
                'categoryId' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 7,
                'name' => 'Quần thời trang 07',
                'description' => 'Quần thời trang 07',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 35000,
                'categoryId' => 3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 8,
                'name' => 'Quần thời trang 08',
                'description' => 'Quần thời trang 08',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 32000,
                'categoryId' => 2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 9,
                'name' => 'Quần thời trang 09',
                'description' => 'Quần thời trang 09',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 40000,
                'categoryId' => 3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 10,
                'name' => 'Quần thời trang 10',
                'description' => 'Quần thời trang 10',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 36000,
                'categoryId' => 2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 11,
                'name' => 'Quần thời trang 11',
                'description' => 'Quần thời trang 11',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 38000,
                'categoryId' => 2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 12,
                'name' => 'Quần thời trang 12',
                'description' => 'Quần thời trang 12',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 46000,
                'categoryId' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 13,
                'name' => 'Quần thời trang 13',
                'description' => 'Quần thời trang 13',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 56000,
                'categoryId' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 14,
                'name' => 'Quần thời trang 14',
                'description' => 'Quần thời trang 14',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 16000,
                'categoryId' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 15,
                'name' => 'Quần thời trang 15',
                'description' => 'Quần thời trang 15',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 26000,
                'categoryId' => 2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 16,
                'name' => 'Quần thời trang 16',
                'description' => 'Quần thời trang 16',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 36000,
                'categoryId' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 17,
                'name' => 'Quần thời trang 17',
                'description' => 'Quần thời trang 17',
                'thumbnail' => 'https://image.yes24.vn/Upload/ProductImage/ISTYLE_MEN/1316523_1_L.jpg',
                'price' => 46000,
                'categoryId' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
