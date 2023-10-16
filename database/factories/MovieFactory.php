<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = fake()->dateTimeThisDecade();
        return [
            //
            'title' => fake()->name(),
            'description' => fake()->paragraph(),
            'genre_id' => rand(1, 15),
            'length' => rand(config('constants.movie.len.begin'), config('constants.movie.len.end')), // 1-3 hours
            'released_date' => fake()->dateTimeThisDecade(),
            'available_date' => fake()->dateTimeThisDecade('+2 years'),
        ];
    }
}
