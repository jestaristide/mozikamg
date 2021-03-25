<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','artist_name','slug','birthdate','birtplace','description','tag','address','email','tel','profil_link', 'cover_link'];
}
