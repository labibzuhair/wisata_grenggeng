<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketWisataEdukasi;
use Illuminate\Routing\Controller;

class AdminPaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edukasis = PaketWisataEdukasi::orderBy('updated_at', 'desc')->get();
        return view('layouts.admin.paket-wisata.paket-wisata', compact('edukasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.paket-wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'target' => 'required|string|max:255',
                'harga' => 'required|string|max:255',
                'benefit' => 'required|string',
                'durasi' => 'required|string|max:255',
                'lokasi' => 'required|string',

            ]);



            // Menyimpan data ke database
            PaketWisataEdukasi::create([
                'nama' => $validated['nama'],
                'target' => $validated['target'],
                'harga' => $validated['harga'],
                'benefit' => $validated['benefit'],
                'durasi' => $validated['durasi'],
                'lokasi' => $validated['lokasi'],

            ]);

            return redirect()->route('admin.paket-wisata.create')->with('success', 'paket wisata berhasil disimpan!');
        } catch (\Exception $e) {
            // Menangkap error dan mengembalikan pesan error
            return redirect()->route('admin.paket-wisata.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
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
    public function edit(string $id)
    {
        $edukasi = PaketWisataEdukasi::findOrFail($id);
        return view('layouts.admin.paket-wisata.edit', compact('edukasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $paket = PaketWisataEdukasi::find($id);

            if (!$paket) {
                return redirect()->route('admin.paket-wisata.edit', $id)
                    ->with('error', 'paket wisata tidak ditemukan!');
            }

            // Validasi input jika diperlukan
            $request->validate([
                'nama' => 'required|string|max:255',
                'target' => 'required|string|max:255',
                'harga' => 'required|string|max:255',
                'benefit' => 'required|string',
                'durasi' => 'required|string|max:255',
                'lokasi' => 'required|string',
            ]);

            $paket->nama = $request->nama;
            $paket->target = $request->target;
            $paket->harga = $request->harga;
            $paket->benefit = $request->benefit;
            $paket->durasi = $request->durasi;
            $paket->lokasi = $request->lokasi;



            $paket->save();

            return redirect()->route('admin.paket-wisata')->with('success', 'paket wisata berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('admin.paket-wisata.edit', $id)
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $edukasis = PaketWisataEdukasi::findOrFail($id);
        $edukasis->delete();

        return redirect()->route('admin.paket-wisata')->with('success', 'slider berhasil dihapus.');

    }
}
