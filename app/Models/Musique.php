<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musique extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'tag',
        'category',
        'author',
        'compositor',
        'studio',
        'cover_link',
        'jacket_link',
        'yt_link',
        'audio_link',
        '360p_link',
        '480p_link',
        '720p_link',
        '1080p_link',
        '4k_link',
    ];

    public function artistes() {
        return $this->belongsToMany(Artiste::class);
    }
}
