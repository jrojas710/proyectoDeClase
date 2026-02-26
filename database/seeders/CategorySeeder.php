<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $category1 = new Category();
        $category1->name = "Electrodomestico";
        $cateogry1->description = "Esta es la descripcion del electrodomestico";

        $category1->save();

        $category2 = new Category();
        $category2->name = "Tecnologia";
        $cateogry2->description = "Esta es la descripcion de tecnologia";

        $category2->save();
    }
}
