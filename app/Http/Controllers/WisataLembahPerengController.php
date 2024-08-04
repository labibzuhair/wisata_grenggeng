<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataLembahPerengController extends Controller
{
    public function index()
    {
        return view('layouts/main/wisata/lembah-pereng');
    }
}
