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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['bootcamp', 'workshop', 'competition', 'class', 'seminar', 'retreat']);
            $table->text('description');
            $table->string('location');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('max_participants')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->string('currency', 3)->default('KES');
            $table->foreignId('organizer_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('facility_id')->nullable()->constrained()->onDelete('set null');
            $table->json('images')->nullable();
            $table->json('tags')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
