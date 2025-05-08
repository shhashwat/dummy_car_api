<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarSpecs>
 */
class CarSpecsFactory extends Factory
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
            'claim' => fake()->randomElement(['yes', 'no']),
            'make' => fake()->company(),
            'model' => fake()->word(),
            'registartion_year' => fake()->year(),
            'fuel_type' => fake()->randomElement(['Petrol', 'Diesel', 'Electric', 'Hybrid']),
            'variant' => fake()->bothify('##?#?#'),
            'insurance_till' => fake()->date('Y-m-d', '+2 years'),
        ];
    }
}
