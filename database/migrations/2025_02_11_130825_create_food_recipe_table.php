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
        Schema::create('food_recipe', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // テーブルへの外部キー
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('recipe_id');
            // 外部キー制約
            $table->foreign('food_id')->references('id')->on('food')->onDelete('cascade');
            $table->foreign('recipe_id')->references('id')->on('recipe')->onDelete('cascade');

            $table->unique(['food_id, recipe_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_recipe');
    }
};
