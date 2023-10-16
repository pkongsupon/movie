<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TagList>
 */
class TagListFactory extends Factory
{
    private static $movie_id = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'movie_id' => self::$movie_id++,
            'tag_id' => rand(1,config('constants.tag.count')),
        ];
    }
}
