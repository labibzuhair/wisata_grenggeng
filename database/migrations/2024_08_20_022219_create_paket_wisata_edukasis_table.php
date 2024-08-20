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
        Schema::create('paket_wisata_edukasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('target');
            $table->string('harga');
            $table->longText('benefit');
            $table->string('durasi');
            $table->longText('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_wisata_edukasis');
    }
};
