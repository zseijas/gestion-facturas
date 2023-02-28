<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'name' => 'producto 1',
            'price_and_fee' => 123.45,
            'price' => 117.27,
            'fee' => 5, // porcentaje
        ]);

        \DB::table('products')->insert([
            'name' => 'producto 2',
            'price_and_fee' => 46.65,
            'price' => 39.65,
            'fee' => 15, // porcentaje
        ]);

        \DB::table('products')->insert([
            'name' => 'producto 3',
            'price_and_fee' => 39.73,
            'price' => 34.96,
            'fee' => 12, // porcentaje
        ]);

        \DB::table('products')->insert([
            'name' => 'producto 4',
            'price_and_fee' => 250,
            'price' => 230,
            'fee' => 8, // porcentaje
        ]);

        \DB::table('products')->insert([
            'name' => 'producto 5',
            'price_and_fee' => 59.35,
            'price' => 111.33,
            'fee' => 10, // porcentaje
        ]);
    }
}
