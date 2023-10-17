<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TagList>
 */
class TagListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'movie_id' => rand(1, config('constants.movie.count')),
            'tag_id' => rand(1,config('constants.tag.count')),
        ];
    }
}
