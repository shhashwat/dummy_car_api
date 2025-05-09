<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nominee>
 */
class NomineeFactory extends Factory
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
            'nominee_name' => fake()->name(),
            'dob' => fake()->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'relationship' => fake()->randomElement(['Father', 'Mother', 'Spouse', 'Sibling', 'Child', 'Friend',]),
            'gender' => fake()->randomElement(['male', 'female', 'other']),
        ];
    }
}
