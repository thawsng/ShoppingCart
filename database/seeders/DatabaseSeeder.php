<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategorySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderDetailSeeder::class);
    }
}
