<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\catgame_highscore>
 */
class catgame_highscoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'user_name' => fake()->name(),
            'lvl1' => fake()->randomDigitNotNull(),
            'lvl2' => fake()->randomDigitNotNull(),
            'lvl3' => fake()->randomDigitNotNull(),
            'overall' => fake()->randomDigitNotNull(),
        ];
    }
}
