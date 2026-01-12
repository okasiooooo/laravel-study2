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
    Schema::create('posts', function (Blueprint $table) {
        $table->id(); // ID（自動で増える番号）
        
        // ★ここに設計図の内容を書く！★
        $table->string('title');       // 文字列のカラム
        $table->text('content');       // 長い文章のカラム
        
        $table->timestamps(); // 作成日時・更新日時
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};