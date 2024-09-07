<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'title' => fake()->sentence(),
          'thumbnail' => fake()->optional()->imageUrl(),
          'body' => '<p>' . implode('</p><p>', fake()->paragraphs(5)) . '</p>',
          'lang' => fake()->randomElement(['ar', 'en']),
        ];
    }
}
