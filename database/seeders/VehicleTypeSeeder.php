<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Truck', 'Bus', 'Car', '3 Wheelers', 'Truck'];

        foreach ($names as $name) {
            VehicleType::factory()->create([
                'name' => $name,
                'description' => fake()->paragraph,
                'price_per_vehicle' => fake()->numberBetween(100, 500),
            ]);
        }
    }
}
