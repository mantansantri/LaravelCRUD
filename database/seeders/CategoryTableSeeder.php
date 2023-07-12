<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([

            'name' => 'category 1'
        ]);
        Category::create([

            'name' => 'category 2'
        ]);
        Category::create([

            'name' => 'category 3'
        ]);
    }
}
