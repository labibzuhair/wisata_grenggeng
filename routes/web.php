<?php

use App\Models\Produk;
use App\Models\Kegiatan;
use App\Models\ProdukTTG;
use App\Models\ProdukAnyaman;
use App\Models\ProdukMakanan;
use App\Models\ProdukTerbaik;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeranaController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\AdminTTGController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProdukTTGController;
use App\Http\Controllers\WisataAnyamanPandan;
use App\Http\Controllers\WisataTTGController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\WisataMakamController;
use App\Http\Controllers\WisataPasarController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminMakananController;
use App\Http\Controllers\AdminSlidersController;
use App\Http\Controllers\AdminOlehOlehController;
use App\Http\Controllers\ProdukAnyamanController;
use App\Http\Controllers\ProdukMakananController;
use App\Http\Controllers\ProdukTerbaikController;
use App\Http\Controllers\WisataSejarahController;
use App\Http\Controllers\AdminPaketWisataController;
use App\Http\Controllers\AdminAnyamanPandanController;
use App\Http\Controllers\AdminProdukTerbaikController;
use App\Http\Controllers\WisataLembahPerengController;
use App\Http\Controllers\WisataAnyamanPandanController;

// storege link
Route::get('/storage-link', function(){
    Artisan::call('storage:link');
    return 'Storage Link Berhasil';
});

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

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/gallery/{id}', [GalleryController::class, 'show'])->name('gallery.show');

// Route::get('/produk/{id}/detail-terbaik', [ProdukTerbaikController::class, 'show'])->name('detail-terbaik');

Route::get('/produk', [ProdukAnyamanController::class, 'index'])->name('produk');
Route::get('/produk/semua-anyaman', [ProdukAnyamanController::class, 'all'])->name('produk.semua-anyaman');
Route::get('/produk/{id}/detail-anyaman', [ProdukAnyamanController::class, 'show'])->name('detail-anyaman');

Route::get('/produk/semua-ttg', [ProdukTTGController::class, 'all'])->name('produk.semua-ttg');
Route::get('/produk/{id}/detail-ttg', [ProdukTTGController::class, 'show'])->name('detail-ttg');

Route::get('/produk/semua-makanan', [ProdukMakananController::class, 'all'])->name('produk.semua-makanan');
Route::get('/produk/{id}/detail-makanan', [ProdukMakananController::class, 'show'])->name('detail-makanan');
Route::get('/api/produk/{type}/{id}', function ($type, $id) {
    switch ($type) {
        case 'terbaik':
            $produk = ProdukTerbaik::find($id);
            break;
        case 'anyaman':
            $produk = ProdukAnyaman::find($id);
            break;
        case 'ttg':
            $produk = ProdukTTG::find($id);
            break;
        case 'makanan':
            $produk = ProdukMakanan::find($id);
            break;
        default:
            return response()->json(['error' => 'Invalid product type'], 400);
    }

    if ($produk) {
        return response()->json([
            'nama_produk' => $produk->nama_produk,
            'harga' => $produk->harga,
            'kategori_produk' => $produk->kategori,
            'deskripsi_produk' => $produk->deskripsi,
            'img_produk' => array_filter([
                $produk->img1,
                $produk->img2,
                $produk->img3,
                $produk->img4,
                $produk->img5,
            ]),
        ]);
    } else {
        return response()->json(['error' => 'Product not found'], 404);
    }
});


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

    Route::get('admin/produk/terbaik', [AdminProdukTerbaikController::class, 'index'])->name('admin.produk.terbaik');
    Route::get('/admin/produk/terbaik/create', [AdminProdukTerbaikController::class, 'create'])->name('admin.produk.terbaik.create');
    Route::post('/admin/produk/terbaik/store', [AdminProdukTerbaikController::class, 'store'])->name('admin.produk.terbaik.store');
    Route::get('/admin/produk/terbaik/{id}/edit', [AdminProdukTerbaikController::class, 'edit'])->name('admin.produk.terbaik.edit');
    Route::put('/admin/produk/terbaik/{id}', [AdminProdukTerbaikController::class, 'update'])->name('admin.produk.terbaik.update');
    Route::delete('/admin/produk/terbaik/{id}', [AdminProdukTerbaikController::class, 'destroy'])->name('admin.produk.terbaik.hapus');

    Route::get('admin/produk/anyaman-pandan', [AdminAnyamanPandanController::class, 'index'])->name('admin.produk.anyaman-pandan');
    Route::get('/admin/produk/anyaman-pandan/create', [AdminAnyamanPandanController::class, 'create'])->name('admin.produk.produk-anyaman.create');
    Route::post('/admin/produk/anyaman-pandan/store', [AdminAnyamanPandanController::class, 'store'])->name('admin.produk.produk-anyaman.store');
    Route::get('/admin/produk/anyaman-pandan/{id}/edit', [AdminAnyamanPandanController::class, 'edit'])->name('admin.produk.produk-anyaman.edit');
    Route::put('/admin/produk/anyaman-pandan/{id}', [AdminAnyamanPandanController::class, 'update'])->name('admin.produk.produk-anyaman.update');
    Route::delete('/admin/produk/anyaman-pandan/{id}', [AdminAnyamanPandanController::class, 'destroy'])->name('admin.produk.produk-anyaman.hapus');


    Route::get('admin/produk/ttg', [AdminTTGController::class, 'index'])->name('admin.produk.ttg');
    Route::get('/admin/produk/ttg/create', [AdminTTGController::class, 'create'])->name('admin.produk.ttg.create');
    Route::post('/admin/produk/ttg/store', [AdminTTGController::class, 'store'])->name('admin.produk.ttg.store');
    Route::get('/admin/produk/ttg/{id}/edit', [AdminTTGController::class, 'edit'])->name('admin.produk.ttg.edit');
    Route::put('/admin/produk/ttg/{id}', [AdminTTGController::class, 'update'])->name('admin.produk.ttg.update');
    Route::delete('/admin/produk/ttg/{id}', [AdminTTGController::class, 'destroy'])->name('admin.produk.ttg.hapus');

    Route::get('admin/produk/makanan', [AdminMakananController::class, 'index'])->name('admin.produk.makanan');
    Route::get('/admin/produk/makanan/create', [AdminMakananController::class, 'create'])->name('admin.produk.makanan.create');
    Route::post('/admin/produk/makanan/store', [AdminMakananController::class, 'store'])->name('admin.produk.makanan.store');
    Route::get('/admin/produk/makanan/{id}/edit', [AdminMakananController::class, 'edit'])->name('admin.produk.makanan.edit');
    Route::put('/admin/produk/makanan/{id}', [AdminMakananController::class, 'update'])->name('admin.produk.makanan.update');
    Route::delete('/admin/produk/makanan/{id}', [AdminMakananController::class, 'destroy'])->name('admin.produk.makanan.hapus');

    Route::get('admin/sliders', [AdminSlidersController::class, 'index'])->name('admin.sliders');
    Route::get('/admin/sliders/create', [AdminSlidersController::class, 'create'])->name('admin.sliders.create');
    Route::post('/admin/sliders/store', [AdminSlidersController::class, 'store'])->name('admin.sliders.store');
    Route::post('/admin/sliders/uploadImage', [AdminSlidersController::class, 'uploadImage'])->name('admin.sliders.uploadImage');
    Route::get('/admin/sliders/{id}/edit', [AdminSlidersController::class, 'edit'])->name('admin.sliders.edit');
    Route::put('/admin/sliders/{id}', [AdminSlidersController::class, 'update'])->name('admin.sliders.update');
    Route::delete('/admin/sliders/{id}', [AdminSlidersController::class, 'destroy'])->name('admin.sliders.hapus');

    Route::get('admin/events', [AdminEventController::class, 'index'])->name('admin.events');
    Route::get('/admin/event/create', [AdminEventController::class, 'create'])->name('admin.event.create');
    Route::post('/admin/event/store', [AdminEventController::class, 'store'])->name('admin.event.store');
    Route::get('/admin/event/{id}/edit', [AdminEventController::class, 'edit'])->name('admin.event.edit');
    Route::put('/admin/event/{id}', [AdminEventController::class, 'update'])->name('admin.event.update');
    Route::delete('/admin/event/{id}', [AdminEventController::class, 'destroy'])->name('admin.event.hapus');

    Route::get('admin/paket-wisata', [AdminPaketWisataController::class, 'index'])->name('admin.paket-wisata');
    Route::get('/admin/paket-wisata/create', [AdminPaketWisataController::class, 'create'])->name('admin.paket-wisata.create');
    Route::post('/admin/paket-wisata/store', [AdminPaketWisataController::class, 'store'])->name('admin.paket-wisata.store');
    Route::get('/admin/paket-wisata/{id}/edit', [AdminPaketWisataController::class, 'edit'])->name('admin.paket-wisata.edit');
    Route::put('/admin/paket-wisata/{id}', [AdminPaketWisataController::class, 'update'])->name('admin.paket-wisata.update');
    Route::delete('/admin/paket-wisata/{id}', [AdminPaketWisataController::class, 'destroy'])->name('admin.paket-wisata.hapus');

    Route::get('admin/gallery', [AdminGalleryController::class, 'index'])->name('admin.gallery');
    Route::get('/admin/gallery/create', [AdminGalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('/admin/gallery/store', [AdminGalleryController::class, 'store'])->name('admin.gallery.store');
    Route::get('/admin/gallery/{id}/edit', [AdminGalleryController::class, 'edit'])->name('admin.gallery.edit');
    Route::put('/admin/gallery/{id}', [AdminGalleryController::class, 'update'])->name('admin.gallery.update');
    Route::delete('/admin/gallery/{id}', [AdminGalleryController::class, 'destroy'])->name('admin.gallery.hapus');


});
