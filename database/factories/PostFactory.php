<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'title' => $this->faker->words($nb = 4, $asText = true),
            'description' => $this->faker->paragraph(1),
            'content' => $this->faker->paragraph(3),
            'category_id' => $this->faker->numberBetween($min = 1, $max = 4),
            'views' => $this->faker->numberBetween($min = 1, $max = 500),
            'thumbnail' => $this->faker->imageUrl($width = 640,
                $height = 480, 'cats', true, 'Faker'),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }

}
