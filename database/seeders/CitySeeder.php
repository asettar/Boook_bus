<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::factory()->create(['name' => 'Casablanca']);
        City::factory()->create(['name' => 'Settat']);
        City::factory()->create(['name' => 'Marrakech']);
        // City::factory(10)->create();
    }
}
