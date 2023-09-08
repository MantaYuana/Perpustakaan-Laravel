<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => $this->faker->isbn13(),
            'title' => $this->faker->sentence(4),
            'author' => $this->faker->name(),
            'image_path' => $this->faker->imageUrl(),
            'publisher' => $this->faker->company(),
            'category' => $this->faker->word(),
            'pages' => $this->faker->numberBetween(4, 600),
            'language' => $this->faker->languageCode(),
            'publish_date' => $this->faker->dateTime(),
            'subjects' => $this->faker->word(),
            'desc' => $this->faker->paragraph()
        ];
    }
}
