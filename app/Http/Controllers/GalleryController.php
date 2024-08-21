<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with('photos', 'mainPhoto')->get();
    return view('layouts/main/galery/galery', compact('galleries'));
    }
    public function show($id)
{
    $gallery = Gallery::with('photos')->findOrFail($id);
    return view('layouts/main/galery/show', compact('gallery'));
}
}
