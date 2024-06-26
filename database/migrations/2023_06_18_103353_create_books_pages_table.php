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
        Schema::create('books_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id')->nullable(false);
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->bigInteger('page_number')->default('1');
            $table->text('image')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_pages');
    }
};
