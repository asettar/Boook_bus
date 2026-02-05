<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Segment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $cities = City::all();
        // $segments = 0;
        // while ($segments < 10) {
        //     $startCity = $cities->random();
        //     $endCity = $cities->random();
        //     if ($startCity == $endCity) continue;

        //     Segment::factory()->create([
        //         'start_city_id' => $startCity->id,
        //         'end_city_id' => $endCity->id,
        //     ]);
        //     $segments++;
        // } 

        // casablanca -marrakesh
        Segment::factory()->create([
            'start_city_id' => 1,
            'end_city_id' => 3,
        ]);
        
        //casa-settat
        Segment::factory()->create([
            'start_city_id' => 1,
            'end_city_id' => 2,
        ]);

        // marrakesh-casablanca
        Segment::factory()->create([
            'start_city_id' => 3,
            'end_city_id' => 1,
        ]);


        // marrakech-settat
        Segment::factory()->create([
            'start_city_id' => 3,
            'end_city_id' => 2,
        ]);

        // settat-casablanca
        Segment::factory()->create([
            'start_city_id' => 2,
            'end_city_id' => 1,
        ]);

        //settat-marakesh

        Segment::factory()->create([
            'start_city_id' => 2,
            'end_city_id' => 3,
        ]);
    }
}
