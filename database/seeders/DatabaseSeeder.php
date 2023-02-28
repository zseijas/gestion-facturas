<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            UsersSeeder::class,
            ProductsSeeder::class,
        ]);
    }
}
