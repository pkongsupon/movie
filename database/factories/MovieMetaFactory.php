<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MovieMeta>
 */
class MovieMetaFactory extends Factory
{
    private static $movie_id = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pics = array_fill(0, rand(1,10), fake()->imageUrl(640,480,'movie'));
        return [
            //
            'movie_id' => self::$movie_id++,
            'meta_picture_url_json' => json_encode($pics),
            'meta_title' => fake()->sentence(),
            'meta_description' => fake()->paragraph(),
        ];
    }
}
