<?php

namespace Database\Seeders;

use App\Models\Metropolitian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetropolitianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Metropolitian::factory(10)->create();

    }
}
