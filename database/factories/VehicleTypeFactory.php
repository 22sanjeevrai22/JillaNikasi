<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehicleType>
 */
class VehicleTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $basePrice = $this->faker->numberBetween(100, 500);
        $names = ['Truck', 'Bus', 'Car', '3 Wheelers', 'Van'];

        return [
            'name' => fake()->randomElement($names),
            'description' => $this->faker->paragraph,
            'price_per_vehicle' => $basePrice,
        ];
    }
}
