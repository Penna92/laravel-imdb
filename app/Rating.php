<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $guarded = [];
    // creo funzione con lo stesso nome della tabella a cui mi collego minuscolo AL PLURALE (relazione 1 to many)
    public function movies()
    {
        return $this->hasMany('App\Movie');
    }
}
