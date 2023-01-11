<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountrieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(5, true),
        ];
    }
}
