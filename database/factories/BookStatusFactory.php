<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->word()
        ];
    }
}
