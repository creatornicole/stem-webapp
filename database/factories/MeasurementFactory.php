<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MeasurementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'latitude' => $this->faker->latitude($min = -90, $max = 90),
            'longitude' => $this->faker->longitude($min = -180, $max = 180),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'ph' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 14), //ph value range 0-14
            'temp' => $this->faker->numberBetween($min = 0, $max = 45),
            'status' => $this->faker->boolean($chanceOfGettingTrue = 50) //0 -> live, 1 -> archive
        ];
    }
}
