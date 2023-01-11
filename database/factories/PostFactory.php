<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'content' => $this->faker->text($maxNbChars = 50),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
