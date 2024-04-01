<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['title', 'duration', 'album_id'];

    // Relação com o álbum
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
