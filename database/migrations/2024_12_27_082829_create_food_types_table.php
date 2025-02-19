<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * マイグレーションを実行します。
     */
    public function up(): void
    {
        Schema::create('food_types', function (Blueprint $table) {
            $table->string('name')->primary();  // `name`を主キーとして設定
            $table->string('description');  // `description`カラムを追加
            $table->timestamps();
        });
    }

    /**
     * マイグレーションを元に戻します。
     */
    public function down(): void
    {
        Schema::dropIfExists('food_types');
    }
};
