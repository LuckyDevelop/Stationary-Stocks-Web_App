<?php

namespace Database\Seeders;

use App\Models\Qty;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Qty::truncate();
        Qty::insert([
            [
                'uom' => 'Liter'
            ],
            [
                'uom' => 'Pcs'
            ],
            [
                'uom' => 'Rim'
            ],
            [
                'uom' => 'Kg'
            ]
        ]);
    }
}
