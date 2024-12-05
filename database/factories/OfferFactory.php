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
            'payment' => $this->faker->payment(),
            'company' => $this->faker->company(),
            'applied' => $this->faker->applied(),
            'workspace' => $this->faker->workspace(),
            'journey' => $this->faker->journey(),
        ];
    }
}
