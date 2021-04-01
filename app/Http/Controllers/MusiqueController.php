<?php

namespace App\Http\Controllers;

use App\Models\Musique;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MusiqueController extends Controller
{
    public function index()
    {
        $musiques = Musique::with('artistes')->get();
        return Inertia::render('Main/MusicHome', compact('musiques'));
    }

    public function show()
    {
        return Inertia::render('Main/MusicDetails');
    }
}
