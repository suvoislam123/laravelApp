<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'details' => $this->faker->unique()->sentence(),
            'price' => $this->faker->randomFloat(2),
            'quantity'=>$this->faker->randomDigitNot(2)
        ];
    }
}
