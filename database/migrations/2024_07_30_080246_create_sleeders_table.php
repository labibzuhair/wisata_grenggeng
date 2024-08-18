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
        Schema::create('sleeders', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wisata');
            $table->string('kategori_wisata');
            $table->text('img_wisata');
            $table->longText('deskripsi_wisata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

        public function down()
        {
            Schema::dropIfExists('sleeders');
        }

};
