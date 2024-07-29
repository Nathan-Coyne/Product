<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Electronics', 'description' => 'Electronic items', 'status' => true],
            ['name' => 'Books', 'description' => 'Various kinds of books', 'status' => true],
            ['name' => 'Furniture', 'description' => 'Household furniture', 'status' => true],
        ]);
    }
}
