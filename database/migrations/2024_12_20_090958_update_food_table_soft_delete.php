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
        Schema::table('food', function (Blueprint $table) {
            $table->softDeletes();  // `deleted_at`カラムを追加
        });
    }

    /**
     * マイグレーションを元に戻します。
     */
    public function down(): void
    {
        Schema::table('food', function (Blueprint $table) {
            $table->dropSoftDeletes();  // `deleted_at`カラムを削除
        });
    }
};
