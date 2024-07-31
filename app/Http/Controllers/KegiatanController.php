<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::paginate(5);
        return view('layouts/main/kegiatan/kegiatan', compact('kegiatans'));
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('layouts/main/kegiatan/detail-kegiatan', compact('kegiatan'));
    }

}
