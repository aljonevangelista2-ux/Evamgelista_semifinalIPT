<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipment;
use App\Models\Laboratories;

class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        // Seed 50 records directly into the equipments table
        Equipment::factory()->count(50)->create();

        // Seed 1 or more records for the second required table
        Laboratories::factory()->count(1)->create();
    }
}