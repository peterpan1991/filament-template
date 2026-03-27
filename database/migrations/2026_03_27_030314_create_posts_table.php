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
            $table->id();
            $table->string('title'); // 标题
            $table->string('slug')->unique(); // 网址别名，用于SEO
            $table->text('excerpt')->nullable(); // 摘要
            $table->longText('content'); // 正文内容
            $table->string('image')->nullable(); // 封面图
            $table->boolean('is_active')->default(true); // 是否显示
            $table->timestamps();
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
