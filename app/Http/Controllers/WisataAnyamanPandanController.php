<?php

namespace App\Http\Controllers;

use App\Models\Sleeder;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WisataAnyamanPandanController extends Controller
{
    public function index()
    {
        $berita = Sleeder::where('kategori_wisata', 'anyaman-pandan')->first();
        return view('layouts/main/wisata/anyaman-pandan', compact('berita'));
    }
}
