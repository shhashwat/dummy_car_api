<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sameAsCurrent = fake()->boolean();

        return [
            'app_id' => fake()->uuid(),

            'add_line_1' => fake()->streetAddress(),
            'pin_code' => fake()->postcode(),
            'city' => fake()->city(),
            'district' => fake()->citySuffix(),
            'state' => fake()->state(),

            'same_as_current' => $sameAsCurrent,
            
            'per_add_line_1' => $sameAsCurrent ? ' ' : fake()->streetAddress(),
            'per_pin_code' => $sameAsCurrent ? ' ' : fake()->postcode(),
            'per_city' => $sameAsCurrent ? ' ' : fake()->city(),
            'per_district' => $sameAsCurrent ? ' ' : fake()->citySuffix(),
            'per_state' => $sameAsCurrent ? ' ' : fake()->state(),
        ];
    }
}
