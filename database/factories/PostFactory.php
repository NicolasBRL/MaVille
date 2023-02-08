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
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'thumb_path' => 'posts/25ESec1IHNZH6hksX9jRr2bpod30DTQxBJmBxzuf.jpg',
            'content' => $this->faker->paragraphs(5, true),
            'author' => 1
        ];
    }
}
