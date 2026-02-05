<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    public function run(): void
    {
        $casa = City::where('name', 'Casablanca')->first();
        $kesh = City::where('name', 'Marrakech')->first();
        $settat = City::where('name', 'Settat')->first();

        Station::factory()->create([
            'name' => 'Casa Maarif',
            'city_id' => $casa->id
        ]);

        Station::factory()->create([
            'name' => 'Casa Oasis',
            'city_id' => $casa->id
        ]);

        Station::factory()->create([
            'name' => 'Casa Nouaceur',
            'city_id' => $casa->id
        ]);

        Station::factory()->create([
            'name' => 'Gueliz',
            'city_id' => $kesh->id
        ]);

        Station::factory()->create([
            'name' => 'Marrakech Center',
            'city_id' => $kesh->id
        ]);

        Station::factory()->create([
            'name' => 'Settat Massira',
            'city_id' => $settat->id
        ]);
    }
}

