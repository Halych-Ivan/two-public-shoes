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
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->string('info')->nullable();
            $table->string('price')->nullable();
            $table->string('price_new')->nullable();
            $table->string('image')->nullable();
            $table->string('size')->nullable();

            $table->string('rating')->nullable();
            $table->string('sale')->nullable();
            $table->string('new')->nullable();
            $table->string('discount')->nullable();
            $table->string('top')->nullable();
            $table->string('banner')->nullable();

            $table->string('visibility')->default('0');


            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');

            $table->softDeletes();
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
