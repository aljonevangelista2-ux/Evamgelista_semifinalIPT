<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LaboratoriesFactory extends Factory
{
    public function definition(): array
    {
        return [
            'room_number' => 'Lab-' . fake()->numberBetween(101, 509),
            'building' => fake()->company() . ' Building',
        ];
    }
}