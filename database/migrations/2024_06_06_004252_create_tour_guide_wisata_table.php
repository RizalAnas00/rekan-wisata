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
        Schema::create('tour_guide_wisata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_guide_id')->constrained('tour_guides')->onDelete('cascade');
            $table->foreignId('wisata_id')->constrained('wisatas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_guide_wisata');
    }
};
