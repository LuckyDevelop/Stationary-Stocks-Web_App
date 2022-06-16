<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
<<<<<<< HEAD

        $this->call([
            QtySeeder::class,
            SupplierSeeder::class,
            TypeSeeder::class,
            StockSeeder::class,
            TransactionSeeder::class,
            BuyingSeeder::class,
        ]);
=======
>>>>>>> 3a3da69552656047b786811b38e24814efa4e5a8
    }
}
