<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataMakamController extends Controller
{
    public function index()
    {
        return view('layouts/main/wisata/makam');
    }
}
