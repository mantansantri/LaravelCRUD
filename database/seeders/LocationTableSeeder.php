<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([

            'name' => 'location 1'
        ]);
        Location::create([

            'name' => 'location 2'
        ]);
        Location::create([

            'name' => 'location 3'
        ]);
    }
}
