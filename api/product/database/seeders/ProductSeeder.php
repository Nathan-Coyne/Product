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
            ['name' => 'iPhone 12', 'description' => 'Latest Apple smartphone', 'price' => 799.99, 'stock' => 50, 'status' => true, 'sub_category_id' => 1],
            ['name' => 'Samsung Galaxy S21', 'description' => 'Latest Samsung smartphone', 'price' => 699.99, 'stock' => 70, 'status' => true, 'sub_category_id' => 1],
            ['name' => 'MacBook Pro', 'description' => 'Latest Apple laptop', 'price' => 1299.99, 'stock' => 30, 'status' => true, 'sub_category_id' => 2],
            ['name' => 'Dell XPS 13', 'description' => 'Latest Dell laptop', 'price' => 999.99, 'stock' => 40, 'status' => true, 'sub_category_id' => 2],
            ['name' => 'The Great Gatsby', 'description' => 'Fiction novel by F. Scott Fitzgerald', 'price' => 10.99, 'stock' => 100, 'status' => true, 'sub_category_id' => 3],
            ['name' => 'Sapiens', 'description' => 'Non-fiction book by Yuval Noah Harari', 'price' => 14.99, 'stock' => 80, 'status' => true, 'sub_category_id' => 4],
            ['name' => 'Office Chair', 'description' => 'Ergonomic office chair', 'price' => 120.00, 'stock' => 20, 'status' => true, 'sub_category_id' => 5],
            ['name' => 'Dining Table', 'description' => 'Wooden dining table', 'price' => 300.00, 'stock' => 15, 'status' => true, 'sub_category_id' => 6],
        ]);
    }
}
