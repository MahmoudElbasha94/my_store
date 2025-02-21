<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Electronics', 'slug' => 'electronics']);
        Category::create(['name' => 'Fasion', 'slug' => 'fasion']);
        Category::create(['name' => 'Books', 'slug' => 'books']);
        Category::create(['name' => 'Men', 'slug' => 'men']);
        Category::create(['name' => 'Woman', 'slug' => 'woman']);
        Category::create(['name' => 'Beauty', 'slug' => 'beauty ']);
        Category::create(['name' => 'Home & Kitchen', 'slug' => 'home & kitchen']);
    }
}
