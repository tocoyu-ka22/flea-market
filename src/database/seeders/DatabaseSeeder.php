<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
            ConditionsTableSeeder::class,
            CategoriesTableSeeder::class,
            ItemsTableSeeder::class,
            Category_itemsTableSeeder::class,
            Sold_itemsTableSeeder::class,
        ]);
    }
}
