<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Location;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TypeTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(UnitTableSeeder::class);
    }
}
