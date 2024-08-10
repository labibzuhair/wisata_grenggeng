<?php

namespace App\Http\Controllers;

use App\Models\ProdukTTG;
use Illuminate\Http\Request;
use App\Models\ProdukAnyaman;
use App\Http\Controllers\Controller;

class ProdukTTGController extends Controller
{

    public function index()
    {
        //
    }
    public function all()
    {
        // Ambil semua produk
        $produks = ProdukTTG::all();

        // Kirim produk ke view
        return view('layouts/main/produk/all', compact('produks'));
    }
       /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = ProdukTTG::findOrFail($id);
        return view('layouts/main/produk/detail-produk', compact('produk'));
    }
}
