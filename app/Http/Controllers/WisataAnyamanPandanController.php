<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WisataAnyamanPandanController extends Controller
{
    public function index()
    {
        return view('layouts/main/wisata/anyaman-pandan');
    }
}
