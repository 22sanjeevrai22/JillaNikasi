<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{

    public function definition(): array
    {
        $units = [
        'kilogram' => 'kg',
        'liter' => 'L',
        'quintal' => 'q',
        'meter' => 'm',
        'gram' => 'g',
        'milliliter' => 'mL'
    ];
    $name = fake()->randomElement(array_keys($units));
    return [
        'name'=>$name,
        'symbol'=>$units[$name],
    ];
    }


}
