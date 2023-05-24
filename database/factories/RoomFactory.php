<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->numberBetween(100, 999),
            'name' => $this->faker->sentence(2), // 'room 101
            'type' => $this->faker->randomElement(['standard', 'deluxe', 'luxury', 'suite']),
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->paragraphs(5, true),
            'slug' => $this->faker->slug(),
            'beds' => $this->faker->numberBetween(1, 4),
            'occupancy' => $this->faker->numberBetween(1, 4),
            'price_per_hour' => $this->faker->numberBetween(100, 999),
            'status' => 'available'
        ];
    }
}
