<?php

namespace Database\Seeders;

use App\Models\CarSpecs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSpecsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarSpecs::factory(20)->create();
    }
}
