<?php

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
Route::get('/paket-wisata', [PaketWisataController::class, 'index'])->name('paket-wisata');
