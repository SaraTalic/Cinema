<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Movie;



class Event extends Model
{
    use HasFactory;

    //Veza vise-vise event-user
    public function users()
    {
        return $this->belongsToMany(User::class, 'usersreservations');
    }

    //Veza 1-vise event-movie
    public function movies(): HasOne
    {
        return $this->hasOne(Movie::class);
    }
}
