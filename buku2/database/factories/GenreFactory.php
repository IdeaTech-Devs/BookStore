<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [];
    }

    /**
     * Indicate that the genre should be predefined.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function predefined($name, $penjelasan)
    {
        return $this->state(function (array $attributes) use ($name, $penjelasan) {
            return [
                'name' => $name,
                'penjelasan' => $penjelasan,
            ];
        });
    }
}