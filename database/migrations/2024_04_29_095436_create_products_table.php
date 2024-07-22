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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku');
            $table->string('slug');
            $table->string('product_name');
            $table->string('product_image')->nullable();
            $table->string('discount');
            $table->string('price');
            $table->string('selling_price');
            $table->longText('product_description')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->enum('is_featured',['active','deactive'])->default('deactive');
            $table->enum('is_active',['active','deactive'])->default('active');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
