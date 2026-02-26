<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $category = Category::inRandomOrder()->first();

    $product = new Product();
    $product->name = "Pc gamer 1";
    $product->description = "Gran pc gamer";
    $product->price = 100000;
    $product->stock = 10;
    $product->category_id = $category->id;
    $product->save();


    $product2 = new Product();
    $product2->name = "Pc gamer 2";
    $product2->description = "Gran pc gamer potente";
    $product2->price = 150000;
    $product2->stock = 5;
    $product2->category_id = $category->id;
    $product2->save();


    $product3 = new Product();
    $product3->name = "Pc gamer 3";
    $product3->description = "Gran pc gamer ultra";
    $product3->price = 200000;
    $product3->stock = 3;
    $product3->category_id = $category->id;
    $product3->save();
    }
}
