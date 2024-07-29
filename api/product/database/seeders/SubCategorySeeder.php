<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sub_categories')->insert([
            ['name' => 'Mobile Phones', 'description' => 'Smartphones and accessories', 'status' => true, 'category_id' => 1],
            ['name' => 'Laptops', 'description' => 'Laptops and accessories', 'status' => true, 'category_id' => 1],
            ['name' => 'Fiction', 'description' => 'Fiction books', 'status' => true, 'category_id' => 2],
            ['name' => 'Non-fiction', 'description' => 'Non-fiction books', 'status' => true, 'category_id' => 2],
            ['name' => 'Chairs', 'description' => 'Various types of chairs', 'status' => true, 'category_id' => 3],
            ['name' => 'Tables', 'description' => 'Various types of tables', 'status' => true, 'category_id' => 3],
        ]);
    }
}
