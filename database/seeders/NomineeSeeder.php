<?php

namespace Database\Seeders;

use App\Models\Nominee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NomineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nominee::factory(20)->create();
    }
}
