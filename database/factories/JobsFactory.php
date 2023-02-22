<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobsPost>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->text($maxNbChars = 200),
            'picture'=> fake()->image($dir = null, $width = 390, $height= 203),
            'description'=> fake()->text($maxNbChars = 300),
            'category' => fake()->word(),
            'location' => fake()->city(),
            'salary' => fake()->number_format(),
        ];
    }
}
