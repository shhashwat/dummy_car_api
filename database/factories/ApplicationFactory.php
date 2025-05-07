<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
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
            'reg_no' => fake()->randomNumber(),
            'mob_no' => fake()->phoneNumber(),
            'status' => fake()->randomElement(['initiated', 'pending', 'approved', 'rejected']),
        ];
    }
}
