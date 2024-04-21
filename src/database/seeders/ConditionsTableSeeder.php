<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'condition' => '販売中'
        ];
        DB::table('conditions')->insert($param);

        $param = [
            'condition' => '売り切れ'
        ];
        DB::table('conditions')->insert($param);
    }
}
