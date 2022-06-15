<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Stock::truncate();
        Stock::insert([
            [
                'supp_id' => '1',
                'qty_id' => '3',
                'type_id' => '1',
                'stock_name' => 'Kertas A4',
                'qty' => '5',
            ],
            [
                'supp_id' => '2',
                'qty_id' => '1',
                'type_id' => '2',
                'stock_name' => 'Minyak',
                'qty' => '10',
            ]
        ]);
    }
}
