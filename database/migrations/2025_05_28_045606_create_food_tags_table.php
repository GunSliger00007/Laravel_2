<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('food_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            // Foreign keys (recommended)
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

            // To avoid duplicate entries
            $table->unique(['food_id', 'tag_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('food_tags');
    }
};
