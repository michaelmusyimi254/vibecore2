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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category', ['equipment', 'supplements', 'apparel', 'electronics', 'accessories']);
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('currency', 3)->default('KES');
            $table->integer('stock')->default(0);
            $table->foreignId('vendor_id')->nullable()->constrained('users')->onDelete('set null');
            $table->json('images')->nullable();
            $table->json('specifications')->nullable();
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
        Schema::dropIfExists('products');
    }
};
