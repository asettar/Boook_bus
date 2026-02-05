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
        // $routes = Route::all();
        // $stations = Station::all();
        // foreach($routes as $route) {
        //     $randomStations = $stations->shuffle()->take(rand(1, 3));
        //     foreach($randomStations as $idx => $station) 
        //         RouteStop::factory()->create([
        //             'route_id' => $route->id,
        //             'station_id' => $station->id,
        //             'order' => $idx + 1
        //     ]);
        // }
// ['route_id', 'station_id', 'order'];
    //cas-kesh
    //casa-settat

        $data = [
            ['route_id' => 1, 'station_id' => 1, 'order' => 1], 
            ['route_id' => 1, 'station_id' => 2, 'order' => 2], 
            ['route_id' => 1, 'station_id' => 3, 'order' => 3],
            ['route_id' => 1, 'station_id' => 4, 'order' => 4], 
            ['route_id' => 1, 'station_id' => 5, 'order' => 5], 
            
            ['route_id' => 3, 'station_id' => 1, 'order' => 1], 
            ['route_id' => 3, 'station_id' => 2, 'order' => 2], 
            ['route_id' => 3, 'station_id' => 6, 'order' => 3],
        ];

        Collect($data)->map(function ($routeStopData) {
            RouteStop::factory()->create($routeStopData);
        });

    }
}
