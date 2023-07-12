<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit::create([

            'name' => 'unit 1'
        ]);
        Unit::create([

            'name' => 'unit 2'
        ]);
        Unit::create([

            'name' => 'unit 3'
        ]);
    }
}
