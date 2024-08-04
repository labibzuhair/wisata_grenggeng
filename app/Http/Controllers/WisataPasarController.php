<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataPasarController extends Controller
{
    public function index()
    {
        return view('layouts/main/wisata/pasar');
    }
}
