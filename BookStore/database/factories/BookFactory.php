<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'isbn' => $this->faker->unique()->isbn10,
            'publisher' => $this->faker->company,
            'image_url' => $this->faker->imageUrl(),
            'file_url' => $this->faker->url,
            'number_pages' => $this->faker->numberBetween(50, 1000),
            'language' => $this->faker->languageCode,
            'publisher_date' => $this->faker->date(),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 5, 100)
        ];
    }
}
