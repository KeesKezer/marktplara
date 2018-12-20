<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieding extends Model
{    // manual reference to proper database
    protected $table = 'biedingen';
    // each bieding can only belong to one advertentie
    public function Advertentie()
    {
        return $this->belongsTo('App\Advertentie');
        return $this->belongsTo('App\User');
    }
}
