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
        Schema::create('tour_guides', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kota_wisata');
            $table->string('bahasa');
            $table->decimal('harga');
            $table->string('nama_tempat_wisata');
            $table->string('no_hp');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('jenis_kelamin');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('tour_guides');
    }
};
