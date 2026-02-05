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

        Route::factory()->create([
            'name' => 'Route-C-M-1',
            'description' => 'Route1 from Casa to marrakesh'
        ]);

        Route::factory()->create([
            'name' => 'Route-C-M-2',
            'description' => 'Route2 from Casa to marrakesh'
        ]);
       
        Route::factory()->create([
            'name' => 'Route-C-S-1',
            'description' => 'Route1 from Casa to settat'
        ]);
        
        Route::factory()->create([
            'name' => 'Route-S-C-1',
            'description' => 'Route1 from Settat to Casa'
        ]);

        Route::factory()->create([
            'name' => 'Route-M-C-1',
            'description' => 'Route1 from Marakesh to Casa'
        ]);
        Route::factory()->create([
            'name' => 'Route-M-C-2',
            'description' => 'Route2 from Marakesh to Casa'
        ]);
    }
}
