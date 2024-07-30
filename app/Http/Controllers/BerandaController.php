<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BerandaController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sleeders = Kegiatan::orderBy('tanggal_kegiatan', 'desc')->take(5)->get();
        $kegiatans = Kegiatan::orderBy('tanggal_kegiatan', 'desc')->take(5)->get();
        return view('layouts/main/beranda/beranda', compact('kegiatans'));
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
    public function show(Beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beranda $beranda)
    {
        //
    }
}
