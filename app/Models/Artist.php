<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'genre', 'bio'];

    // Relação com álbuns
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
