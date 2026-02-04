<?php

namespace Database\Seeders;

use App\Models\Route;
use App\Models\RouteStop;
use App\Models\Station;
use Database\Factories\RouteStopFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteStopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = Route::all();
        $stations = Station::all();
        foreach($routes as $route) {
            $randomStations = $stations->shuffle()->take(rand(1, 3));
            foreach($randomStations as $idx => $station) 
                RouteStop::factory()->create([
                    'route_id' => $route->id,
                    'station_id' => $station->id,
                    'order' => $idx + 1
            ]);
        }
    }
}
