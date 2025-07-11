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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->enum('specialization', ['fitness', 'swimming', 'boxing', 'dance', 'yoga', 'martial_arts', 'running', 'cycling', 'other']);
            $table->text('description');
            $table->string('location');
            $table->string('phone');
            $table->string('email');
            $table->integer('experience_years');
            $table->json('certifications')->nullable();
            $table->decimal('rating', 2, 1)->default(0);
            $table->decimal('hourly_rate', 10, 2);
            $table->json('images')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
