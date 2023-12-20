<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Product A',
                'category_id' => 1,
                'pricing' => 19.99,
                'description' => 'Description for Product A',
            ],
            [
                'id' => 2,
                'name' => 'Product B',
                'category_id' => 2,
                'pricing' => 29.99,
                'description' => 'Description for Product B',
            ],
            [
                'id' => 3,
                'name' => 'Product C',
                'category_id' => 1,
                'pricing' => 39.99,
                'description' => 'Description for Product C',
            ],
        ]);
    }
}
