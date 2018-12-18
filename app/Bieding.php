<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bieding extends Model
{
    // each bieding can only belong to one advertentie
    public function advertenties()
    {
        return $this->hasMany('App\Advertentie')
    }
}
