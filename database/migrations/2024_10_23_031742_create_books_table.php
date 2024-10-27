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
        Schema::create('books', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->integer('published_year');
            $table->integer('quantity');
            $table->string('memo');
            $table->enum('book_genre', [ 'IT',
            '料理',
            'マンガ',
            'スポーツ',
            'ビジネス',
            '自己啓発',
            '歴史',
            'フィクション',
            'ノンフィクション',
            'アート', 'book']);
            // 書籍のフォーマット KIndle vs Book?
            $table->enum('book_format', ['d-books', 'p-book']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};