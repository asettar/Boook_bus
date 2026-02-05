<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Program;
use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [

            [
                'route' => 'Casa-Settat-Marrakech' ,
                'departure_time' => now()->addDay()->setTime(8, 0),
            ],
            [
                'route' => 'Casa-Settat-Marrakech' ,
                'departure_time' => now()->addDay()->setTime(21, 30),
            ],
            [
                'route' => 'Casa-Marrakech Direct',
                'departure_time' => now()->addDay()->setTime(9, 0),
            ],
            [
                'route' => 'Casa-Settat' ,
                'departure_time' => now()->addDay()->setTime(14, 0),
            ],
            [
                'route' => 'Settat-Marrakech',
                'departure_time' => now()->addDay()->setTime(17, 0),
            ],
        ];

        foreach ($programs as $data) {

            $route = Route::where('name', $data['route'])->first();

            Program::factory()->create([
                'route_id' => $route->id,
                'departure_time' => $data['departure_time'],
            ]);
        }
    }
}


