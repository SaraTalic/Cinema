<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Movie extends Model
{
    use HasFactory;

    public function events(): hasMany
    {
        return $this->hasMany(Event::class);
    }
}
