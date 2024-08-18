<?php

namespace App\Http\Controllers;

use App\Models\Sleeder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WisataLembahPerengController extends Controller
{
    public function index()
    {
        $berita = Sleeder::where('kategori_wisata', 'lembah-pereng')->first();

        return view('layouts/main/wisata/lembah-pereng', compact('berita'));
    }
}
