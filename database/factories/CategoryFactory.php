<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->words(3,true);
        return [
            //
            'title' => $title,
            'slug' => Str::slug($title),
            'meta_keywords' => $this->faker->words(mt_rand(3,8),true),
            'meta_description' => $this->faker->words(mt_rand(5,15),true),
            'publicate' => rand(0,1),
            'created_at' => now(),
            'updated_at' => $this->faker->dateTimeThisYear()
        ];
    }
}
