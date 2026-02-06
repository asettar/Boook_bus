<?php

namespace Database\Seeders;

use App\Models\City;
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

    private function addStops($routeName, $stations)
    {
        $route = Route::where('name', $routeName)->first();

        $duration = 0;
        $distance = 0;
        $price = 0;
        $lastCity = null;
        
        foreach ($stations as $stationName) {
            
            $station = Station::where('name', $stationName)->first();
            $stationCity = $station->city->name;
            
            if ($lastCity) {
                $duration += (($stationCity == $lastCity) ? rand(5, 15) : rand(30, 60));
                $distance += (($stationCity == $lastCity) ? rand(5, 10) : rand(50, 80));
                $price += (($stationCity == $lastCity) ? rand(8, 18) : rand(50, 150));
            }

            RouteStop::create([
                'route_id' => $route->id,
                'station_id' => $station->id,
                'duration_from_start' => $duration,
                'distance_from_start' => $distance,
                'price_from_start' => $price
            ]);

            $lastCity = $stationCity;
        }
    }


    public function run(): void
    {
        // db visualise
        // select route_id, s.name, price_from_start, duration_from_start, distance_from_start from route_stops
        // join stations s on s.id = station_id
        // group by route_stops.route_id 
        $this->addStops('Casa-Settat-Marrakech', [
            'Casa Maarif',
            'Casa Oasis',
            'Casa Nouaceur',
            'Settat Massira',
            'Gueliz',
            'Marrakech Center'
        ]);

        $this->addStops('Casa-Marrakech Direct', [
            'Casa Maarif',
            'Casa Oasis',
            'Casa Nouaceur',
            'Gueliz',
            'Marrakech Center'
        ]);

        $this->addStops('Casa-Settat', [
            'Casa Maarif',
            'Casa Oasis',
            'Casa Nouaceur',
            'Settat Massira'
        ]);

        $this->addStops('Settat-Marrakech', [
            'Settat Massira',
            'Gueliz',
            'Marrakech Center'
        ]);
    }
}
