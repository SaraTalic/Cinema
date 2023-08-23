<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\Genre;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    //Veza 1-vise movie-event
    public function events(): hasMany
    {
        return $this->hasMany(Event::class);
    }

    //Veza vise-vise movie-genre
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'moviegenres');
    }
}
