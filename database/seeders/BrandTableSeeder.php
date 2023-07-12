<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create([

            'name' => 'Brand 1'
        ]);
        Brand::create([

            'name' => 'Brand 2'
        ]);
        Brand::create([

            'name' => 'Brand 3'
        ]);
    }
}
