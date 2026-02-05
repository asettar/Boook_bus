<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Route;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CitySeeder::class, 
            StationSeeder::class, 
            BusSeeder::class,
            RouteSeeder::class,
            RouteStopSeeder::class,
            ProgramSeeder::class,
            // ProgramSegmentSeeder::class,
            // ReservationSeeder::class,
        ]);
    }
}
