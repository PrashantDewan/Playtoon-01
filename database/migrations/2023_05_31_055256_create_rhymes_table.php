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
        Schema::create('rhymes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('rhyme')->nullable(); //video
            $table->string('author')->nullable(); 
            $table->string('image'); // thumbnail
            $table->float('length')->default(0);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;
            $table->unsignedBigInteger('rhyme_level_id');
            $table->foreign('rhyme_level_id')->references('id')->on('rhymes_levels')->onDelete('cascade');;
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rhymes');
    }
};
