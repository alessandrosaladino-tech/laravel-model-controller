<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        // RETURNS THE VIEW 'index' (index.blade.php)
        return view('index', ['movies' => Movie::all()]);
    }
}
