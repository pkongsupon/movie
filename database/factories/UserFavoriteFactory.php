<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserFavoriteFactory extends Factory
{
    private static $user_id = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'user_id' => rand(1,config('constants.user.count')),
            'genre_id' => rand(1,15),
            'website_theme' => fake()->url(),
        ];
    }
}
