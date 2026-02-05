<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $cities = City::all();
        // foreach($cities as $city) {
        //     $stationsCnt = rand(1, 3);  // 1 or 3 station per city 
        //     // dump($city->id); 
        //     Station::factory($stationsCnt)->create(['city_id' => $city->id]);
        // }   

        Station::factory()->create(['name' => 'casaMaarif']);
        Station::factory()->create(['name' => 'casaOuasis']);
        Station::factory()->create(['name' => 'casaNouasser']);
        Station::factory()->create(['name' => 'keshGuelise']);
        Station::factory()->create(['name' => 'KeshCenter']);
        Station::factory()->create(['name' => 'SettatMassira']);
    }
}
