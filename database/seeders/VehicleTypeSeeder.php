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
        $names = ['Two Wheelers', 'Three Wheelers', 'Four Wheelers', 'Six Wheelers'];

        foreach($names as $name){
            VehicleType::factory()->create([
                'name' => $name,
            ]);
        }
    }
}
