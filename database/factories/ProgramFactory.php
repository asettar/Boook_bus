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
            'bus_id' => Bus::factory(),
            'departure_time' => new DateTime(),
        ];
    }
}
