<?php

namespace Database\Seeders;

use App\Models\Buying;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BuyingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Buying::truncate();
        Buying::insert([
            [
                'supp_id' => '1',
                'stock_id' => '1',
                'qty' => 10,
                'price' => 14000,
                'total' => 140000,
                'transaction_date' => '2022-06-17',
            ],
            [
                'supp_id' => '2',
                'stock_id' => '2',
                'qty' => 10,
                'price' => 20000,
                'total' => 200000,
                'transaction_date' => '2022-06-18',
            ]
        ]);
    }
}
