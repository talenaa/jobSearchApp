<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Payment' => $this->faker->Payment(),
            'Company' => $this->faker->Company(),
            'Applied' => $this->faker->Applied(),
            'Workspace' => $this->faker->Workspace()
        ];
    }
}