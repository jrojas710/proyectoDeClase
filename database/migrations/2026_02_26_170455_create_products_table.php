<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID normal
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            
            // Relación con categorías usando el estándar
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};