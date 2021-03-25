<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MusiqueController extends Controller
{
    public function index()
    {
        return Inertia::render('Main/MusicHome');
    }

    public function show()
    {
        return Inertia::render('Main/MusicDetails');
    }
}
