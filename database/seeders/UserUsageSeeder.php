<?php

namespace Database\Seeders;

use App\Models\UserUsage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserUsageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        UserUsage::truncate();
        UserUsage::insert([
            [
                'user' => 'Bambang'
            ],
            [
                'user' => 'Didi'
            ],
            [
                'user' => 'Carlyn'
            ],
            [
                'user' => 'Bobby'
            ]
        ]);
    }
}
