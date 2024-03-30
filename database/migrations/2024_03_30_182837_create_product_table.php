<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('barcode')->unique();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->datetime('expiration_date');
            $table->integer('stock');
            $table->string('image');
            $table->foreignId('category_id')->constrained('category');
            $table->foreignId('brand_id')->constrained('brand');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('distributor_id')->constrained('distributor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
