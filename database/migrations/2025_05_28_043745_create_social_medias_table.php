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
        Schema::create('social_medias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('social_media_type_id')->constrained('social_media_types')->onDelete('cascade');
            $table->string('account_name');
            $table->boolean('status')->default(1);
            $table->softDeletes(); // deleted_at
            $table->timestamps();  // created_at and updated_at
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('social_medias');
    }
};
