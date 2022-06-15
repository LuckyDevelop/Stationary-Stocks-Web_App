<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Supplier::truncate();
        Supplier::insert([
            [
                'supp_name' => 'Global Stationary',
                'address' => 'Jalan Thamrin',
            ],
            [
                'supp_name' => 'Local Stationary',
                'address' => 'Jalan Sutomo',
            ]
        ]);
    }
}
