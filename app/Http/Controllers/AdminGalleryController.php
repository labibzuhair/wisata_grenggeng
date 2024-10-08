<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\PaketWisataEdukasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminGalleryController extends Controller
{

    public function index()
    {
        $galleries = Gallery::with('photos', 'mainPhoto')->get();
        return view('layouts.admin.gallery.gallery', compact('galleries'));
    }

    public function create()
    {
        return view('layouts.admin.gallery.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'img1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'additional_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);

        try {
            // Simpan gallery
            $gallery = Gallery::create([
                'name' => $request->input('nama_kegiatan'),
            ]);

            // Simpan gambar utama
            if ($request->hasFile('img1')) {
                $image = $request->file('img1')->store('gallery', 'public');

                // Simpan data gambar di database
                $gallery->photos()->create([
                    'image' => $image,
                    'is_main' => true,
                ]);
            }

            // Simpan gambar tambahan
            if ($request->hasFile('additional_images')) {
                foreach ($request->file('additional_images') as $image) {
                    $image = $image->store('gallery', 'public');

                    // Simpan data gambar di database
                    $gallery->photos()->create([
                        'image' => $image,
                        'is_main' => false,
                    ]);
                }
            }

            return redirect()->route('admin.gallery')->with('success', 'Gallery berhasil ditambahkan.');

        } catch (\Exception $e) {
            // Hapus gambar yang sudah ter-upload jika terjadi error
            if (isset($image) && Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }

            // Logging error untuk debugging
            Log::error('Error saat menyimpan gallery: ' . $e->getMessage());

            return redirect()->route('admin.gallery.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }
    public function edit($id)
    {
        $gallery = Gallery::with('photos')->findOrFail($id);
        return view('layouts.admin.gallery.edit', compact('gallery'));
    }
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        // Tambahkan validasi
        $request->validate([
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi untuk gambar utama
            'additional_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi untuk gambar tambahan
        ]);

        try {
            // Update nama kegiatan
            $gallery->name = $request->input('nama_kegiatan');
            $gallery->save();

            // Update gambar utama jika ada
            if ($request->hasFile('img1')) {
                $mainPhoto = $request->file('img1')->store('photos');
                // Hapus gambar lama jika ada
                if ($gallery->mainPhoto) {
                    Storage::delete($gallery->mainPhoto->image);
                    $gallery->mainPhoto->update(['image' => $mainPhoto]);
                } else {
                    // Jika tidak ada mainPhoto sebelumnya, buat yang baru
                    Photo::create([
                        'gallery_id' => $gallery->id,
                        'image' => $mainPhoto,
                        'is_main' => true,
                    ]);
                }
            }

            // Debugging: Cek apakah ada gambar yang ditandai untuk dihapus
            if ($request->has('deleted_images')) {
                $deletedImages = $request->input('deleted_images');

                foreach ($deletedImages as $photoId) {
                    $photo = Photo::where('id', $photoId)->where('gallery_id', $gallery->id)->first();

                    if ($photo) {
                        // Hapus file fisik dari storage jika ada
                        if (Storage::exists($photo->image)) {
                            Storage::delete($photo->image);
                        }

                        // Hapus data dari database
                        $photo->delete();
                    }
                }
            }

            // Update atau Tambah gambar tambahan
            if ($request->hasFile('additional_images')) {
                foreach ($request->file('additional_images') as $key => $image) {
                    $photoPath = $image->store('photos');

                    if (strpos($key, 'new_') === 0) {
                        // Gambar baru
                        Photo::create([
                            'gallery_id' => $gallery->id,
                            'image' => $photoPath,
                            'is_main' => false,
                        ]);
                    } else {
                        // Update gambar yang sudah ada
                        $photo = Photo::where('id', $key)->where('gallery_id', $gallery->id)->first();

                        if ($photo) {
                            // Hapus gambar lama jika ada
                            if (Storage::exists($photo->image)) {
                                Storage::delete($photo->image);
                            }
                            $photo->update(['image' => $photoPath]);
                        }
                    }
                }
            }

            return redirect()->route('admin.gallery')->with('success', 'Gallery berhasil diupdate.');
        } catch (\Exception $e) {
            // Log error jika terjadi exception
            return redirect()->back()->with('error', 'Gagal mengupdate gallery: ' . $e->getMessage());
        }
    }






    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('admin.gallery')->with('success', 'slider berhasil dihapus.');

    }

}
