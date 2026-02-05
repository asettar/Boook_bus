<?php

namespace Database\Factories;

use App\Models\Bus;
use App\Models\Route;
use App\Models\Segment;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'route_id' => Route::factory(),
            'segment_id' => Segment::factory(),
            'bus_id' => Bus::factory(),
            'distance' => fake()->numberBetween(20, 500),
            'price' => fake()->randomFloat(2, 30, 500),
            'start_time' => new DateTime(),
            'end_time' => new DateTime('2030-01-01'),   // to be ubdated in seeders
        ];
    }
}
