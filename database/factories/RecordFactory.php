<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'artist' => $this->faker->name(),
            'state' => $this->faker->randomElement(['nuevo', 'usado', 'colección']),
            'release_year' => $this->faker->year(),
            'price' => $this->faker->randomFloat(2, 5, 50),
            'cover_image' => $this->faker->imageUrl(640, 480, 'vinyl', true, 'cover'),
        ];
    }
}
