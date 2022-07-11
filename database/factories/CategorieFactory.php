<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name'=>$this->faker->word(),
            'Description'=>$this->faker->paragraph(1),
        ];
    }
}
