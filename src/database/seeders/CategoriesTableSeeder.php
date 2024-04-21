<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category' => '衣類'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '小物'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '雑貨'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => '電子機器'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'アクセサリー'
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'キッチン用品'
        ];
        DB::table('categories')->insert($param);
    }
}
