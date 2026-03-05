<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\CartItem;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->count(10)->create();

        Product::factory()->count(50)->create();

        Customer::factory()->count(10)->create();

        CartItem::factory()->count(50)->create();
    }
}