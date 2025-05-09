<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application;
use App\Models\VehichleDetails;
use App\Models\CarSpecs;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Calling the seeders for each model
        $this->call([
            ApplicationSeeder::class,
            VehichleDetailsSeeder::class,
            CarSpecsSeeder::class,
            KycSeeder::class,
            AddressSeeder::class,
            NomineeSeeder::class,
        ]);
    }
}
