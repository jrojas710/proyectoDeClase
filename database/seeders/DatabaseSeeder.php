<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use App\Models\CartItem;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory()->count(100)->create();

        Product::factory()->count(100000)->create();


        CartItem::factory()->count(100000)->create();
    }
}