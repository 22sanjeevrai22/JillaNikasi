<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Metropolitian>
 */
class MetropolitianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'description'=>$this->faker->paragraph,
            'province'=>$this->faker->state,
            'zip_code'=>$this->faker->postcode,
            'email'=>fake()->email,

        ];
    }
}
