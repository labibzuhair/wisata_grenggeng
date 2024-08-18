<?php

namespace App\Http\Controllers;

use App\Models\Sleeder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WisataPasarController extends Controller
{
    public function index()
    {
        $berita = Sleeder::where('kategori_wisata', 'pasar')->first();
        return view('layouts/main/wisata/pasar', compact('berita'));
    }
}
