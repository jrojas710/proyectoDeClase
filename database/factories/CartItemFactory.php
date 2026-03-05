<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Customer;

class CartItemFactory extends Factory
{
    public function definition(): array
    {
        return[
            'product_id' => Product::inRandomOrder()->value('id'),
            'customer_id' => Customer::inRandomOrder()->value('id'),
            'quantity' => fake()->numberBetween(1, 5),
        ];
    }
}