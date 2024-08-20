<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukMakanan;
use Illuminate\Routing\Controller;

class ProdukMakananController extends Controller
{

    public function index()
    {
        //
    }
    public function all()
    {
        // Ambil semua produk
        $produks = ProdukMakanan::orderBy('updated_at', 'desc')->get();
        $makanan = ProdukMakanan::latest()->take(5)->get();
        // Kirim produk ke view
        return view('layouts/main/produk/all', compact('produks', 'makanan'));
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
        $produk = ProdukMakanan::findOrFail($id);
        return view('layouts/main/produk/detail-produk', compact('produk'));
    }
}
