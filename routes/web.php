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
use App\Http\Controllers\AdminTTGController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\WisataAnyamanPandan;
use App\Http\Controllers\WisataTTGController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\WisataMakamController;
use App\Http\Controllers\WisataPasarController;
use App\Http\Controllers\AdminSlidersController;
use App\Http\Controllers\AdminOlehOlehController;
use App\Http\Controllers\ProdukAnyamanController;
use App\Http\Controllers\WisataSejarahController;
use App\Http\Controllers\AdminPaketWisataController;
use App\Http\Controllers\AdminAnyamanPandanController;
use App\Http\Controllers\AdminProdukTerbaikController;
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



// routes/web.php
Route::get('auth', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('auth', [AuthController::class, 'login']);
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('admin/produk/produk-terbaik', [AdminProdukTerbaikController::class, 'index'])->name('admin.produk.produk-terbaik');

    Route::get('admin/produk/anyaman-pandan', [AdminAnyamanPandanController::class, 'index'])->name('admin.produk.anyaman-pandan');
    Route::get('/admin/produk/anyaman-pandan/create', [AdminAnyamanPandanController::class, 'create'])->name('produk.produk-anyaman.create');
    Route::post('/admin/produk/anyaman-pandan/store', [AdminAnyamanPandanController::class, 'store'])->name('produk.produk-anyaman.store');
    Route::get('/admin/produk/anyaman-pandan/{id}/edit', [AdminAnyamanPandanController::class, 'edit'])->name('produk.produk-anyaman.edit');
    Route::put('/admin/produk/anyaman-pandan/{id}', [AdminAnyamanPandanController::class, 'update'])->name('produk.produk-anyaman.update');
    Route::delete('/admin/produk/anyaman-pandan/{id}', [AdminAnyamanPandanController::class, 'destroy'])->name('produk.produk-anyaman.hapus');


    Route::get('admin/produk/ttg', [AdminTTGController::class, 'index'])->name('admin.produk.ttg');

    Route::get('admin/produk/oleh-oleh', [AdminOlehOlehController::class, 'index'])->name('admin.produk.oleh-oleh');

    Route::get('admin/sliders', [AdminSlidersController::class, 'index'])->name('admin.sliders');

    Route::get('admin/event', [AdminEventController::class, 'index'])->name('admin.event');

    Route::get('admin/paket-wisata', [AdminPaketWisataController::class, 'index'])->name('admin.paket-wisata');

});
