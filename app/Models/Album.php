<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['title', 'release_date', 'artist_id'];

    // Relação com o artista
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    // Relação com músicas
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
