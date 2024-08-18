<?php

namespace App\Http\Controllers;

use App\Models\Sleeder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WisataSejarahController extends Controller
{
    public function index()
    {
        $berita = Sleeder::where('kategori_wisata', 'wisata-sejarah')->first();
        return view('layouts/main/wisata/wisata-sejarah', compact('berita'));
    }
}
