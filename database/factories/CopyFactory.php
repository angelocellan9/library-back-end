<?php

namespace Database\Factories;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Copy>
 */
class CopyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => fake()->randomElement(Book::pluck('id')),
            'status' => fake()->randomElement(['available', 'checked_out']),
            'copy_number' => fake()->numberBetween(1, 100),
        ];
    }
}
