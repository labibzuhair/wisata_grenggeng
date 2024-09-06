<?php

namespace App\Http\Controllers;

use App\Models\Sleeder;
use App\Models\ProdukTTG;
use Illuminate\Http\Request;
use App\Models\ProdukAnyaman;
use App\Models\ProdukMakanan;
use App\Models\ProdukTerbaik;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;



class AdminController extends Controller
{
    public function index()
    {

        $lastTerbaik = ProdukTerbaik::latest()->first();
        $jumlahTerbaik = ProdukTerbaik::count();

        $lastAnyaman = ProdukAnyaman::latest()->first();
        $jumlahAnyaman = ProdukAnyaman::count();

        $lastTTG = ProdukTTG::latest()->first();
        $jumlahTTG = ProdukTTG::count();

        $lastMakanan = ProdukMakanan::latest()->first();
        $jumlahMakanan = ProdukMakanan::count();

        $lastSlider = Sleeder::latest()->first();
        $jumlahSlider = Sleeder::count();

        $lastEvent = Kegiatan::latest()->first();
        $jumlahEvent = Kegiatan::count();

        $lastGallery = Gallery::latest()->first();
        $jumlahGallery = Gallery::count();

        // $lastEvents = ProdukEvents::latest()->first();
        // $jumlahEvents = ProdukEvents::count();

        return view('layouts.admin.dashboard.dashboard', compact('lastTerbaik', 'jumlahTerbaik', 'lastAnyaman', 'jumlahAnyaman', 'lastTTG', 'jumlahTTG', 'lastMakanan', 'jumlahMakanan', 'lastSlider', 'jumlahSlider', 'lastEvent', 'jumlahEvent', 'lastGallery', 'jumlahGallery'));
    }
    public function create()
    {
        return view('layouts.admin.admin.create'); // Return ke view form tambah admin
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|unique:admins,name',
            'email' => 'required|email|unique:admins',
            'password' => [
                'required',
                'confirmed',
                'min:8', // Password minimal 8 karakter
                'regex:/[a-z]/', // Harus ada huruf kecil
                'regex:/[A-Z]/', // Harus ada huruf besar
                'regex:/[0-9]/', // Harus ada angka
                'regex:/[@$!%*#?&]/', // Harus ada simbol
            ],
        ], [
            'password.regex' => 'Password harus mengandung setidaknya satu huruf kecil, satu huruf besar, satu angka, dan satu simbol (@, $, !, %, *, #, ?, &).',
        ]);
        try {
            // Simpan admin baru
            Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Redirect ke dashboard dengan pesan sukses
            return redirect()->route('admin.dashboard')->with('success', 'Admin berhasil ditambahkan');
        } catch (\Exception $e) {
            // Jika gagal, redirect ke halaman input dengan pesan error
            return redirect()->back()->withInput()->withErrors(['error' => 'Gagal menambah admin, silakan coba lagi.']);
        }
    }

    // Untuk menampilkan form ganti password
    public function editPassword()
    {
        return view('layouts.admin.admin.update'); // Return ke view form ganti password
    }

    // Untuk update password admin
    public function updatePassword(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        if (!$admin) {
            return redirect()->back()->withErrors(['error' => 'Tidak ada admin yang sedang login']);
        }
        $request->validate([
            'current_password' => 'required',
            'password' => [
                'required',
                'confirmed',
                'min:8', // Password minimal 8 karakter
                'regex:/[a-z]/', // Harus ada huruf kecil
                'regex:/[A-Z]/', // Harus ada huruf besar
                'regex:/[0-9]/', // Harus ada angka
                'regex:/[@$!%*#?&]/', // Harus ada simbol
            ],
        ], [
            'password.regex' => 'Password harus mengandung setidaknya satu huruf kecil, satu huruf besar, satu angka, dan satu simbol (@, $, !, %, *, #, ?, &).',
        ]);

        // Periksa password lama
        $admin = Auth::guard('admin')->user();
        if (!Hash::check($request->current_password, $admin->password)) {
            return redirect()->back()->withErrors(['current_password' => 'Password lama tidak cocok.']);
        }

        try {
            // Update password admin yang sedang login
            $admin->password = Hash::make($request->password);
            $admin->save();

            // Proses logout setelah berhasil update password
            Auth::guard('admin')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // Redirect dengan pesan sukses
            return redirect()->route('login')->with('success', 'Password berhasil diupdate');
        } catch (\Exception $e) {
            // Jika gagal, redirect dengan pesan error
            return redirect()->back()->withErrors(['error' => 'Gagal mengupdate password, silakan coba lagi.']);
        }
    }
}
