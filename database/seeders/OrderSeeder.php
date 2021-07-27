<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'orders';
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table($tableName)->truncate();

        \Illuminate\Support\Facades\DB::table($tableName)->insert([
            [
                'id' => 1,
                'totalPrice' => 30000,
                'customerId' => 2,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-10),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
                'status' => 1
            ],
            [
                'id' => 2,
                'totalPrice' => 60000,
                'customerId' => 1,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-9),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-6),
                'status' => 1
            ],
            [
                'id' => 3,
                'totalPrice' => 120000,
                'customerId' => 3,
                'created_at' => \Illuminate\Support\Carbon::now()->addDays(-4),
                'updated_at' => \Illuminate\Support\Carbon::now()->addDays(-2),
                'status' => 1
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
