<?php

use App\Models\Produk;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeranaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\WisataAnyamanPandan;
use App\Http\Controllers\WisataTTGController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\WisataMakamController;
use App\Http\Controllers\WisataPasarController;
use App\Http\Controllers\ProdukAnyamanController;
use App\Http\Controllers\WisataSejarahController;
use App\Http\Controllers\WisataLembahPerengController;
use App\Http\Controllers\WisataAnyamanPandanController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
Route::get('/kegiatan/{id}', [KegiatanController::class, 'show'])->name('detail-kegiatan');

Route::get('/wisata/edukasi/anyaman-pandan', [WisataAnyamanPandanController::class, 'index'])->name('anyaman-pandan');
Route::get('/wisata/edukasi/TTG', [WisataTTGController::class, 'index'])->name('TTG');
Route::get('/wisata/edukasi/wisata-sejarah', [WisataSejarahController::class, 'index'])->name('wisata-sejarah');
Route::get('/wisata/religi/makam', [WisataMakamController::class, 'index'])->name('makam');
Route::get('/wisata/kuliner/lembah-pereng', [WisataLembahPerengController::class, 'index'])->name('lembah-pereng');
Route::get('/wisata/kuliner/pasar', [WisataPasarController::class, 'index'])->name('pasar');

Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/all', [ProdukController::class, 'all'])->name('produk.all');
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

Route::get('/tabs', function () {
    return view('tabs');
});



// Rute untuk halaman login admin
Route::middleware('guest:admin')->group(function () {
    Route::get('auth', [AuthController::class, 'showLoginForm'])->name('auth');
    Route::post('auth', [AuthController::class, 'login']);
});

// Rute untuk logout admin
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Rute yang dilindungi middleware auth:admin
Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Rute admin lainnya
});
