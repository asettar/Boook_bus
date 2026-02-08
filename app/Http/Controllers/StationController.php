<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Station;
use Illuminate\Http\Request;

class StationController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->query('query', '');

        $stations = Station::with('city')
            ->where('name', 'like', "%{$query}%")
            ->orWhereHas('city', function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%");
            })
            ->limit(10)
            ->get()
            ->map(function($station) {
                return [
                    'id' => $station->id,
                    'name' => $station->city->name . ' - ' . $station->name, // show city-station
                ];
            });

        return response()->json($stations);
    }

}
