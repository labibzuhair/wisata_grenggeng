<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use App\Models\PaketWisataEdukasi;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edukasis = PaketWisataEdukasi::orderBy('updated_at', 'desc')->get();
        return view('layouts/main/paket-wisata/paket-wisata', compact('edukasis'));
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
    public function show(PaketWisata $paketWisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaketWisata $paketWisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaketWisata $paketWisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaketWisata $paketWisata)
    {
        //
    }
}
