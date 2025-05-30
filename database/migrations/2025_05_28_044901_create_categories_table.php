<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->text('description');
            $table->integer('rank')->default(0);
            $table->boolean('status')->default(1);  // added +6 status from your pattern
            $table->softDeletes();  // +6 deleted_at
            $table->timestamps();   // +6 created_at and updated_at
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
