<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->date('date');
            $table->time('time');
            $table->integer('guest');
            $table->boolean('status')->default(1); // 1 = active, 0 = inactive or cancelled
            $table->softDeletes(); // deleted_at
            $table->timestamps();  // created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
