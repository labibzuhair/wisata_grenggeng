<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_event');
            $table->string('tanggal_event');
            $table->string('waktu');
            $table->string('lokasi');
            $table->string('pengisi_acara');
            $table->text('deskripsi'); //termasuk isi cara
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('kegiatans');
    }
};
