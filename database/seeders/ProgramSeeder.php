<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Program;
use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    // protected $fillable = ['route_id', 'segment_id', 'bus_id', 'distance', 'price', 'start_time', 'end_time'];

        $data = [
            //c-m
            ['route_id' => 1, 'segment_id' => 3, 'bus_id' => 1, 'distance' => 240, 'price' => 200, 'start_time' => '2025-02-06 10:00:00'], 
            ['route_id' => 1, 'segment_id' => 3, 'bus_id' => 2, 'distance' => 240, 'price' => 220, 'start_time' => '2025-02-06 16:00:00'], 
            ['route_id' => 1, 'segment_id' => 3, 'bus_id' => 2, 'distance' => 240, 'price' => 250, 'start_time' => '2025-02-06 20:00:00'], 
        ];

        collect($data)->map(function($programData) {
            Program::factory()->create($programData);
        });
    }
}
