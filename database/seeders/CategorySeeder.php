<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();

        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Quần thời trang nam',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 2,
                'name' => 'Quần thời trang nữ',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-8),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-8),
            ],
            [
                'id' => 3,
                'name' => 'Quần thời trang trẻ em',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-7),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-6),
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
