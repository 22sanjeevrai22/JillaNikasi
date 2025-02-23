<?php

namespace Database\Factories;

use App\Models\VehicleType;
use App\Models\Person;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicle_type_id' => VehicleType::inRandomOrder()->first()->id,
            'vehicle_regd_no'=> Str::random(6),
            'person_id'=>Person::inRandomOrder()->first()->id,
            'vehicle_license_plate'=> Str::random(4),
        ];
    }
}
