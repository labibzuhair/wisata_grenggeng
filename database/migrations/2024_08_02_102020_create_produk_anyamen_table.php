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
        Schema::create('produk_anyamen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('img_produk1');
            $table->string('img_produk2');
            $table->string('img_produk3');
            $table->string('img_produk4');
            $table->string('img_produk5');
            $table->text('deskripsi_produk');
            $table->string('kategori_produk');
            $table->string('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_anyamen');
    }
};
