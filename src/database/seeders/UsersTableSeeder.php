<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'email' => 'mail123@gmail.com',
            'password' => 'coachtech123'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'hanako',
            'email' => 'mail456@gmail.com',
            'password' => 'coachtech456'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'jack',
            'email' => 'mail789@gmail.com',
            'password' => 'coachtech789'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'jiro',
            'email' => 'mail000@gmail.com',
            'password' => 'coachtech000'
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'emi',
            'email' => 'mail111@gmail.com',
            'password' => 'coachtech111'
        ];
        DB::table('users')->insert($param);
    }
}
