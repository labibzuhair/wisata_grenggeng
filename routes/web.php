<?php

use App\Models\Produk;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeranaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PaketWisataController;


Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/kegiatan/{id}', [KegiatanController::class, 'show'])->name('detail-kegiatan');

Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/api/produk/{id}', function ($id) {
    $produk = Produk::find($id);
    return response()->json([
        'nama_produk' => $produk->nama_produk,
        'harga' => $produk->harga,
        'kategori_produk' => $produk->kategori_produk,
        'deskripsi_produk' => $produk->deskripsi_produk,
        'img_produk' => [
            $produk->img_produk1,
            $produk->img_produk2,
            $produk->img_produk3,
            $produk->img_produk4,
            $produk->img_produk5,
        ],
    ]);
});
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('detail-produk');

Route::get('/paket-wisata', [PaketWisataController::class, 'index'])->name('paket-wisata');

