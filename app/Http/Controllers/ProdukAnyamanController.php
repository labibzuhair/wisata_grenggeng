<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukAnyaman;
use App\Http\Controllers\Controller;

class ProdukAnyamanController extends Controller
{
    public function index()
    {
        $produks = ProdukAnyaman::latest()->take(10)->get();
        return view('layouts/main/produk/produk', compact('produks'));
    }
    public function all()
    {
        // Ambil semua produk
        $produks = ProdukAnyaman::all();

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
        $produk = ProdukAnyaman::findOrFail($id);
        return view('layouts/main/produk/detail-produk', compact('produk'));
    }
}
