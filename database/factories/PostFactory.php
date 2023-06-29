<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => mt_rand(1,2),
            'name' => $this->faker->sentence(1),
            'slug' => $this->faker->slug(2),
            'price'=> $this->faker->numberBetween(1000, 10000),
            'qty'  => $this->faker->numberBetween(1, 50)
        ];
    }
}
