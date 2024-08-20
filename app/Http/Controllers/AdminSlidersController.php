<?php

namespace App\Http\Controllers;

use App\Models\Sleeder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Sleeder::orderBy('updated_at', 'desc')->get();
        return view('layouts.admin.slider.slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    try {
        // Validasi input
        $validated = $request->validate([
            'nama_wisata' => 'required|string|max:255',
            'kategori_wisata' => 'required|string|max:255',
            'deskripsi_wisata' => 'required|string',
            'img_wisata' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menyimpan gambar dan menyimpan link ke database
        $images = [];
        if ($request->hasFile('img_wisata')) {
            $file = $request->file('img_wisata');
            $path = $file->store('images/img_wisata', 'public');
            $images['img_wisata'] = $path;
        }

        // Menyimpan data ke database
        Sleeder::create([
            'nama_wisata' => $validated['nama_wisata'],
            'kategori_wisata' => $validated['kategori_wisata'],
            'deskripsi_wisata' => $validated['deskripsi_wisata'],
            'img_wisata' => $images['img_wisata'] ?? null,
        ]);

        return redirect()->route('admin.sliders.create')->with('success', 'Slider berhasil disimpan!');
    } catch (\Exception $e) {
        return redirect()->route('admin.sliders.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
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
        $sliders = Sleeder::findOrFail($id);
        return view('layouts.admin.slider.edit', compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $sliders = Sleeder::find($id);

            if (!$sliders) {
                return redirect()->route('admin.slidera.edit', $id)
                    ->with('error', 'slider tidak ditemukan!');
            }

            // Validasi input jika diperlukan
            $request->validate([
                'nama_wisata' => 'required|string|max:255',
                'kategori_wisata' => 'required|string|max:255',
                'deskripsi_wisata' => 'required|string',
                'img_wisata' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

            ]);

            $sliders->nama_wisata = $request->nama_wisata;
            $sliders->kategori_wisata = $request->kategori_wisata;
            $sliders->deskripsi_wisata = $request->deskripsi_wisata;

            // Update gambar jika diunggah
            if ($request->hasFile('img_wisata')) {
                $sliders->img_wisata = $request->file('img_wisata')->store('images/img_wisata');
            }


            $sliders->save();

            return redirect()->route('admin.sliders')->with('success', 'slider berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('admin.sliders.edit', $id)
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Sleeder::findOrFail($id);
        $slider->delete();

        return redirect()->route('admin.sliders')->with('success', 'slider berhasil dihapus.');
    }
}
