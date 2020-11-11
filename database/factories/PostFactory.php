<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        $slug = make_slug($title);
        return [
            "user_id" => 1,
            "title" => $title,
            "slug" => $slug,
            "description" => $this->faker->paragraphs(3, true),
            "published" => $this->faker->boolean(),
        ];
    }
}
