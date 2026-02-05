<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Route::factory()->factory(10)->create();

        Route::create([
            'name' => 'Casa-Settat-Marrakech',
            'description' => 'Passes through Settat'
        ]);

        Route::create([
            'name' => 'Casa-Marrakech Direct',
            'description' => 'Direct route without Settat'
        ]);

        Route::create([
            'name' => 'Casa-Settat',
            'description' => 'Casablanca to Settat'
        ]);

        Route::create([
            'name' => 'Settat-Marrakech',
            'description' => 'Settat to Marrakech'
        ]);

    }
}
