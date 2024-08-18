<?php

namespace App\Http\Controllers;

use App\Models\Sleeder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WisataMakamController extends Controller
{
    public function index()
    {
        $berita = Sleeder::where('kategori_wisata', 'makam')->first();
        return view('layouts/main/wisata/makam', compact('berita'));
    }
}
