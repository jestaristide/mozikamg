<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArtisteController extends Controller
{
    public function index() {
        $artistes = Artiste::all();

        return Inertia::render('Main/ArtistHome', compact('artistes'));
    }

    public function show($slug) {
        $artiste = Artiste::where('slug', $slug)->first();

        return Inertia::render('Main/ArtistDetails', compact('artiste'));
    }
}
