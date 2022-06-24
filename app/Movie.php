<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    // creo funzione con lo stesso nome della tabella a cui mi collego minuscolo (relazione MANY TO 1)
    public function rating()
    {
        return $this->belongsTo('App\Rating');
    }

    //creo funzione con lo stesso nome della tabella a cui mi collego, stavolta al PLURALE perchè la relazione è MANY TO MANY
    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }
}
