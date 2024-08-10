<?php

namespace App\Http\Controllers;

use App\Models\Sleeder;
use App\Models\ProdukTTG;
use Illuminate\Http\Request;
use App\Models\ProdukAnyaman;
use App\Models\ProdukMakanan;
use App\Models\ProdukTerbaik;
use App\Http\Controllers\Controller;

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

    // $lastEvents = ProdukEvents::latest()->first();
    // $jumlahEvents = ProdukEvents::count();

        return view('layouts.admin.dashboard.dashboard', compact('lastTerbaik', 'jumlahTerbaik', 'lastAnyaman', 'jumlahAnyaman', 'lastTTG', 'jumlahTTG', 'lastMakanan', 'jumlahMakanan', 'lastSlider', 'jumlahSlider'));
    }
}
