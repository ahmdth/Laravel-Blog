<?php

namespace Database\Factories;

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'excrept' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(20),
            'published_at' => date("Y-m-d h:i:s")
        ];
    }
}
