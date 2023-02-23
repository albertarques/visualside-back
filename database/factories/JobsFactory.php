<?php

namespace Database\Factories;

use App\Models\Advertiser;
use App\Models\Categories;
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
        $categoryId = Categories::all()->random();
        $advertiserId = Advertiser::all()->random();
        return [
            'title'=> fake()->title(),
            'picture'=> fake()->url(),
            'description'=> fake()->text(),
            'location' => fake()->city(),
            'salary' => fake()->text(),
            'categories_id' => $categoryId->id,
            'advertisers_id' => $advertiserId->id,
        ];
    }
}
