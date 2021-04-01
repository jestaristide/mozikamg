<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function artist_cover(Request $request) {
        /*if($request->file('cover')) {
            $uploadFile = $request->file('cover');
            $cover_name = 'artist_cover_' . sha1(time());
            $extension = $request->file('cover')->extension();
            $cover = $cover_name . $extension;
            //Storage::putFileAs('storage', $request->file('cover'), $cover);
        } else {
            $foto = 'default-artist.png';
        }
        $path = $request->file('file')->store('public/files');
        return response($foto);*/
        return response(true);
    }
}
