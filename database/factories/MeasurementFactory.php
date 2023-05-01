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
            'gps' => $this->faker->latitude($min = -90, $max = 90),
            'timestamp' => $this->faker->dateTime($max = 'now', $timezone = null),
            'ph' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 14), //ph value range 0-14
            'temp' => $this->faker->numberBetween($min = 0, $max = 45),
            'status' => $this->faker->boolean($chanceOfGettingTrue = 50) //0 -> live, 1 -> archive
        ];
    }
}