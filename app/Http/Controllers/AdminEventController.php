<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sleeder;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminEventController extends Controller
{
    public function index()
    {
        $events = Kegiatan::orderBy('updated_at', 'desc')->get();
        return view('layouts.admin.event.event', compact('events'));
    }
    public function create()
    {
        return view('layouts.admin.event.create');
    }
    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'nama_event' => 'required|string|max:255',
                'tanggal_event' => 'required|string|max:255',
                'waktu' => 'required|string|max:255',
                'lokasi' => 'required|string|max:255',
                'pengisi_acara' => 'required|string|max:255',
                'deskripsi' => 'required|string',
            ]);


            // Menyimpan data ke database
            Kegiatan::create([
                'nama_event' => $validated['nama_event'],
                'tanggal_event' => $validated['tanggal_event'],
                'waktu' => $validated['waktu'],
                'lokasi' => $validated['lokasi'],
                'pengisi_acara' => $validated['pengisi_acara'],
                'deskripsi' => $validated['deskripsi'],
            ]);

            return redirect()->route('admin.event.create')->with('success', 'slider berhasil disimpan!');
        } catch (\Exception $e) {
            // Menangkap error dan mengembalikan pesan error
            return redirect()->route('admin.event.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage())->withInput();
        }
    }
    public function show(string $id)
    {
        //
    }
    public function edit($id)
    {
        $event = Kegiatan::findOrFail($id);
        return view('layouts.admin.event.edit', compact('event'));
    }
    public function update(Request $request, $id)
    {
        try {
            $events = Kegiatan::find($id);

            if (!$events) {
                return redirect()->route('admin.event.edit', $id)
                    ->with('error', 'event tidak ditemukan!');
            }

            // Validasi input jika diperlukan
            $request->validate([
                'nama_event' => 'required|string|max:255',
                'tanggal_event' => 'required|string|max:255',
                'waktu' => 'required|string|max:255',
                'lokasi' => 'required|string|max:255',
                'pengisi_acara' => 'required|string|max:255',
                'deskripsi' => 'required|string',

            ]);

            $events->nama_event = $request->nama_event;
            $events->tanggal_event = $request->tanggal_event;
            $events->waktu = $request->waktu;
            $events->lokasi = $request->lokasi;
            $events->pengisi_acara = $request->pengisi_acara;
            $events->deskripsi = $request->deskripsi;

            $events->save();

            return redirect()->route('admin.events')->with('success', 'event berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->route('admin.events.edit', $id)
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function destroy(string $id)
    {
        $event = Kegiatan::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.events')->with('success', 'event berhasil dihapus.');
    }
}
