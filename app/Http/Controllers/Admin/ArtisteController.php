<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artiste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ArtisteController extends Controller
{
    public function index() {
        $artistes = Artiste::all();
        return Inertia::render('Admin/Artiste/ArtisteHome', compact('artistes'));
    }

    public function create() {
        return Inertia::render('Admin/Artiste/ArtisteCreate');
    }

    public function edit($slug) {
        $toUpdateArtiste = Artiste::where('slug', $slug)->first();
        return Inertia::render('Admin/Artiste/ArtisteEdit', compact('toUpdateArtiste'));
    }

    public function store() {
        //Artiste::create(request()->all());

        if(request()->file('cover')) {
            $uploadFile = request()->file('cover')->store('');
            $cover_name = 'artist_cover_' . sha1(time());
            $extension = request()->file('cover')->extension();
            $cover = $cover_name .'.'. $extension;
            //dd($uploadFile->hashName(), $cover);
            dd(Storage::directories(''));disk('public')->put('images', $uploadFile, $cover);
        } else {
            $foto = 'default-artist.png';
        }

        dd(request()->all());

        return redirect()->route('admin.artiste.index');
    }

    public function update($slug) {
        $q = request()->all();
        unset($q['created_at'], $q['updated_at']);

        $toUpdateArtiste = Artiste::where('slug', $slug)
            ->update($q);

        return redirect()->route('admin.artiste.index');
    }

}
