<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return[
            'customer_id' => Customer::inRandomOrder()->value('id'),
            'total' => fake()->randomFloat(2, 20, 2000),
        ];
    }
}