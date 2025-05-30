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
        Schema::create('social_media_types', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('icon');
            $table->string('title');
            $table->boolean('status')->default(1); // active/inactive
            $table->timestamps(); // created_at, updated_at
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_media_types');
    }
};
