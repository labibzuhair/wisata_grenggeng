<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataSejarahController extends Controller
{
    public function index()
    {
        return view('layouts/main/wisata/wisata-sejarah');
    }
}
