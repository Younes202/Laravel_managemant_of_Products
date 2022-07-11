<?php

namespace Database\Factories;

use App\Models\Products\Sellers;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $Seller = Sellers::has('Products')->get()->random();
        $Client = User::all()->except($Seller->id)->random();

        return [
            'Quantity'=>$this->faker->numberBetween(1,3),
            'Client_id' =>$Client->id,
            'Product_id'=>$Client->Products->random()->id,
        ];
    }
}
