<?php

namespace Database\Seeders;

use App\Models\VehichleDetails;
use Illuminate\Database\Seeder;

class VehichleDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehichleDetails::factory(20)->create();
    }
}
