<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TentangController extends Controller
{
    public function index()
    {
        return view('layouts/main/tentang/tentang');
    }
}
