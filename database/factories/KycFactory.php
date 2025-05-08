<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kyc>
 */
class KycFactory extends Factory
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
            'pan' => fake()->regexify('[A-Z]{5}[0-9]{4}[A-Z]{1}'),
            'aadhar' => fake()->regexify('[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}'),
            'dob' => fake()->date(),
            'full_name' => fake()->name(),
            'gender' => fake()->randomElement(['male', 'female', 'other']),
            'status' => 'UNVERIFIED'
        ];
    }
}
