<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_title');
            $table->string('slogan')->nullable();
            $table->string('logo_top');
            $table->string('logo_bottom')->nullable();
            $table->string('favicon')->nullable();
            $table->text('address');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->text('google_map')->nullable();
            $table->boolean('status')->default(1);
            $table->softDeletes(); // deleted_at
            $table->timestamps();  // created_at, updated_at
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }

};
