<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Transaction::truncate();
        Transaction::insert([
            [
                'stock_id' => '1',
                'qty' => '1',
                'transaction_date' => '2022-06-14',
                'user' => 'Bambang',
                'uom' => 'Rim'
            ],
            [
                'stock_id' => '2',
                'qty' => '1',
                'transaction_date' => '2022-06-10',
                'user' => 'Nini',
                'uom' => 'Liter',
            ]
        ]);
    }
}
