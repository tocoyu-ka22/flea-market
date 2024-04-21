<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'シャツ',
            'price' => '1500',
            'brand' => 'COACH',
            'description' => '白色の無地のシャツです。未使用でとても綺麗な状態です。',
            'img_url' => 'https://beiz.jp/images_S/wallpaper/wallpaper_00221.jpg',
            'user_id' => '1',
            'category_id' => '1',
            'condition_id' => '1'
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'ズボン',
            'price' => '3000',
            'brand'=> 'COACH',
            'description' => 'デニムパンツです。何度か着用してますが、程よくダメージが効いておりヴィンテージ感のあるお洒落なパンツになっています。古着を好まれる方におすすめです。',
            'img_url' => 'https://beiz.jp/images_S/wallpaper/wallpaper_00230.jpg',
            'user_id' => '3',
            'category_id' => '1',
            'condition_id' => '2'
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '眼鏡',
            'price' => '1000',
            'brand' => 'laravel',
            'description' => '伊達メガネです。ブルーライトカット機能もついており、スマホやPCを頻繁に使われる方におすすめです。',
            'img_url' => 'https://beiz.jp/images_T/pastel/pastel_00074.jpg',
            'user_id' => '2',
            'category_id' => '2',
            'condition_id' => '1'
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'アロマディフューザー',
            'price' => '2000',
            'brand' => 'TECH',
            'description' => '卓上の小型アロマディフューザーです。水にアロマオイルを混ぜることでとてもリラックスできます。',
            'img_url' => 'https://beiz.jp/images_T/pastel/pastel_00075.jpg',
            'user_id' => '5',
            'category_id' => '3',
            'condition_id' => '2'
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'マフラー',
            'price' => '1200',
            'brand' => 'COACH',
            'description' => '毛糸マフラーです。生地が厚く、とても暖かいので寒い時期にぴったりです。',
            'img_url' => 'https://beiz.jp/images_T/pastel/pastel_00082.jpg',
            'user_id' => '4',
            'category_id' => '2',
            'condition_id' => '1'
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'イヤホン',
            'price' => '5000',
            'brand' => 'TECH',
            'description' => 'ワイヤレスイヤホンです。とても音質が良く、一人時間に没頭したい時に最適です。',
            'img_url' => 'https://beiz.jp/images_S/pastel/pastel_00076.jpg',
            'user_id' => '3',
            'category_id' => '4',
            'condition_id' => '2'
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'ネックレス',
            'price' => '10000',
            'brand' => 'laravel',
            'description' => 'ピンクゴールドのネックレスです。トップの飾りがとても可愛らしく、着用しているだけで首元が華やかになります。',
            'img_url' => 'https://www.beiz.jp/images_M/wallpaper/wallpaper_00224.jpg',
            'user_id' => '5',
            'category_id' => '5',
            'condition_id' => '2'
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '電子ケトル',
            'price' => '4000',
            'brand' => 'TECH',
            'description' => '有名メーカーの電子ケトルです。水を入れてスイッチを入れるだけで簡単に使用できます。',
            'img_url' => 'https://beiz.jp/images_T/pastel/pastel_00081.jpg',
            'user_id' => '1',
            'category_id' => '6',
            'condition_id' => '1'
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => '財布',
            'price' => '3000',
            'brand' => 'laravel',
            'description' => '折財布です。収納ポケットがたくさんあり、カードもたくさん入ります。',
            'img_url' => 'https://beiz.jp/images_T/pastel/pastel_00080.jpg',
            'user_id' => '2',
            'category_id' => '2',
            'condition_id' => '1'
        ];
        DB::table('items')->insert($param);

        $param = [
            'name' => 'かばん',
            'price' => '5000',
            'brand' => 'COACH',
            'description' => '有名ブランドのかばんです。数年使用していましたが、汚れや傷が少なくとても綺麗な状態です。',
            'img_url' => 'https://beiz.jp/images_S/pastel/pastel_00073.jpg',
            'user_id' => '4',
            'category_id' => '2',
            'condition_id' => '2'
        ];
        DB::table('items')->insert($param);
    }
}
