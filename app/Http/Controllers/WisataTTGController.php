<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataTTGController extends Controller
{
    public function index()
    {
        return view('layouts/main/wisata/ttg');
    }
}
