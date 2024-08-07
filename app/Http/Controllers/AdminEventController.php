<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEventController extends Controller
{
    public function index()
    {
        return view('layouts.admin.event.event');
    }
}
