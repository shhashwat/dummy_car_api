<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VehichleDetails>
 */
class VehichleDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'app_id' => fake()->uuid(),
            'make' => fake()->company(),
            'model' => fake()->word(),
            'registration_date' => fake()->date(),
            'manifacturing_year' => (string) fake()->year(),
            'purchased_on_loan' => fake()->boolean(),
            'financier_name' => fake()->company(),
            'chassis_number' => strtoupper(fake()->bothify('??#####??##')),
            'engine_number' => strtoupper(fake()->bothify('ENG###??##')),
            'vehicle_reg_number' => fake()->regexify('[A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{4}'),
            'puc_available' => fake()->boolean(),
        ];
    }
}
