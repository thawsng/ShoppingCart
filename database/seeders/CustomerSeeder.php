<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'customers';
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table($tableName)->truncate();

        \Illuminate\Support\Facades\DB::table($tableName)->insert([
            [
                'id' => 1,
                'fullName' => 'Nguyen Van A',
                'email' => 'vana@gmail.com',
                'phone' => '0912312312',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 2,
                'fullName' => 'Nguyen Van B',
                'email' => 'vana@gmail.com',
                'phone' => '0912312312',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ],
            [
                'id' => 3,
                'fullName' => 'Nguyen Van C',
                'email' => 'vana@gmail.com',
                'phone' => '0912312312',
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
