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
            'title'=> fake()->title(),
            'picture'=> fake()->url(),
            'description'=> fake()->text(),
            'location' => fake()->city(),
            'salary' => fake()->text(),
        ];
    }
}
