<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'product_name' => 'Apple',
            'product_description' => 'Sweet',
            'price' => '10',
            'status' => 'ripe',
        ]);
    }
}
