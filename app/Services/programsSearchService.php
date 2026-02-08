<?php 

namespace App\Services;

use App\Models\City;
use App\Models\{Program, RouteStop, Station};
use App\DTO\TripData;
use Illuminate\Support\Collection;

class programsSearchService {
    public function __construct() {}
    
    
    public function searchTrips(array $data) 
    {
        $programs = $this->getAvailablePrograms($data);
        // dump($programs);
        $tripsData = $this->getTripsData($programs, $data);
        return $tripsData;
    }

    private function getAvailablePrograms(array $data) : Collection {
        $startStationId = $data['start_station_id'];
        $arrivalStationId = $data['arrival_station_id'];
        // dump($startStationId);
        // dump($arrivalStationId);

        
        $programs = Program::with('route.routeStops')
        ->when(!empty($data['departure_time']), function ($query) use ($data) {
            $query->whereDate('departure_time', '>=', $data['departure_time']);
        }, function ($query) {
            $query->whereDate('departure_time', '>=', now());
        })
        ->whereHas('route.routeStops', function($query) use($startStationId) {
            $query->where('station_id', $startStationId);
        })->whereHas('route.routeStops', function($query) use($arrivalStationId) {
            $query->where('station_id', $arrivalStationId);
        })->get();
        
        return $programs;
    }

    private function    getTripsData(Collection &$programs, array $data)  : array {
        $tripsData = [];
        foreach ($programs as $program) {
            $trip = $this->buildTripData($program, $data);
            if ($trip) $tripsData[] = $trip;
        }
        return $tripsData;
    }


    private function    getPathArrivalTimes(Program $program, Collection $routeStops) : array {
        return $routeStops->map(function($stop) use($program) {
                return $program->departure_time->copy()->addMinutes($stop->duration_from_start)->format('H:i');
        })->toArray();
    }

    private function buildTripData(Program $program, array $data): ?TripData
    {
        $routeStops = $program->route->routeStops;
        $stations = $routeStops->pluck('station');

        $startIdx = $stations->search(fn($s) => $s->id == $data['start_station_id']);
        $endIdx = $stations->search(fn($s) => $s->id == $data['arrival_station_id']);

        if ($startIdx === false || $endIdx === false || $startIdx >= $endIdx) return null;

        $startStop = $routeStops[$startIdx];
        $endStop = $routeStops[$endIdx];

        return new TripData(
            programName: $program->route->name,
            price: $endStop->price_from_start - $startStop->price_from_start,
            distance: $endStop->distance_from_start - $startStop->distance_from_start,
            departureTime: $program->departure_time->format('H:i'),
            arrivalTime: $program->departure_time->copy()->addMinutes($endStop->duration_from_start - $startStop->duration_from_start)->format('H:i'),
            path: $stations->slice($startIdx, $endIdx - $startIdx + 1)->pluck('name')->toArray(),
            pathArrivalTimes: $this->getPathArrivalTimes($program, $routeStops->slice($startIdx, $endIdx - $startIdx + 1)) 
        );
    }
}   
