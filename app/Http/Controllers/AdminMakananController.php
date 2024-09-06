<?php

namespace App\Http\Controllers;

use App\Models\ProdukMakanan;
use Illuminate\Http\Request;

class AdminMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = ProdukMakanan::orderBy('updated_at', 'desc')->get();
        return view('layouts.admin.produk-makanan.produk-makanan', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.produk-makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'nama_produk' => 'required|string|max:255',
                'kategori' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'img1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'img2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'img3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'img4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'img5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

            // Menyimpan gambar dan menyimpan link ke database
            $images = [];
            for ($i = 1; $i <= 5; $i++) {
                $imageName = "img{$i}";
                if ($request->hasFile($imageName)) {
                    $file = $request->file($imageName);
                    $path = $file->store('images/produk_makanan');
                    $images[$imageName] = $path;
                }
            }

            // Menyimpan data ke database
            ProdukMakanan::create([
                'nama_produk' => $validated['nama_produk'],
                'kategori' => $validated['kategori'],
                'deskripsi' => $validated['deskripsi'],
                'img1' => $images['img1'] ?? null,
                'img2' => $images['img2'] ?? null,
                'img3' => $images['img3'] ?? null,
                'img4' => $images['img4'] ?? null,
                'img5' => $images['img5'] ?? null,
            ]);

            return redirect()->route('admin.produk.makanan.create')->with('success', 'Produk berhasil disimpan!');
        } catch (\Exception $e) {
            // Menangkap error dan mengembalikan pesan error
            return redirect()->route('admin.produk.makanan.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = ProdukMakanan::findOrFail($id);
        return view('layouts.admin.produk-makanan.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $produk = ProdukMakanan::find($id);

            if (!$produk) {
                return redirect()->route('admin.produk.makanan.edit', $id)
                    ->with('error', 'Produk tidak ditemukan!');
            }

            // Validasi input jika diperlukan
            $request->validate([
                'nama_produk' => 'required|string|max:255',
                'kategori' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'img3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'img4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'img5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            ]);

            $produk->nama_produk = $request->nama_produk;
            $produk->kategori = $request->kategori;
            $produk->deskripsi = $request->deskripsi;

            // Update gambar jika diunggah
            if ($request->hasFile('img1')) {
                $produk->img1 = $request->file('img1')->store('images/img_produk');
            }
            if ($request->hasFile('img2')) {
                $produk->img2 = $request->file('img2')->store('images/img_produk');
            }
            if ($request->hasFile('img3')) {
                $produk->img3 = $request->file('img3')->store('images/img_produk');
            }
            if ($request->hasFile('img4')) {
                $produk->img4 = $request->file('img4')->store('images/img_produk');
            }
            if ($request->hasFile('img5')) {
                $produk->img5 = $request->file('img5')->store('images/img_produk');
            }

            $produk->save();

            return redirect()->route('admin.produk.makanan')->with('success', 'Produk berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('admin.produk.makanan.edit', $id)
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = ProdukMakanan::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin.produk.makanan')->with('success', 'Produk berhasil dihapus.');
    }
}
