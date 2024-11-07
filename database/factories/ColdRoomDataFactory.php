<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ColdRoomData>
 */
class ColdRoomDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sensorId' => $this->faker->uuid(),
            'title'    =>$this->faker->title(),
            'temp'     => $this->faker->numberBetween(-10, 30),
            'humidity' => $this->faker->numberBetween(0, 100),
            'co2'      => $this->faker->numberBetween(300, 1000),
        ];
    }
}
