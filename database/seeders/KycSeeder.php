<?php

namespace Database\Seeders;

use App\Models\Kyc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KycSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kyc::factory(20)->create();
    }
}
