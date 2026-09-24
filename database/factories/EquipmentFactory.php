<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'equipmentname' => fake()->word() . ' ' . fake()->randomElement(['Microscope', 'Centrifuge', 'Beaker', 'Oscilloscope', 'Spectrometer']),
            'description' => fake()->sentence(8),
        ];
    }
}