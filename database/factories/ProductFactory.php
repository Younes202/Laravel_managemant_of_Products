<?php

namespace Database\Factories;

use App\Models\Sellers\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->word(),
            'Description' => $this->faker->paragraph(1),
            'Quantity' => $this->faker->numberBetween(1,100),
            'Status' => $this->faker->randomElement([Products::AVAILABLE_PRODUCT,Products::UNAVAILABLE_PRODUCT]),
            'Image' => $this->faker->randomElement(['1.jfif','2.jfif','3.jfif']),
            'Seller_id' => User::all()->random()->id,





        ];
    }
}
