<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipmentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'equipmentname' => $this->faker->words(3, true),
            'description' => $this->faker->randomElement([
                'home & fashion', 
                'electronics', 
                'hardware', 
                'perishable goods'
            ]),
        ];
    }
}