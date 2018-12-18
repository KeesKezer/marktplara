<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertentie extends Model
{
    //relation: each advertentie can have multiple biedingen
    public function biedingen()
    {
        return $this->hasMany('App\biedingen') //check if proper foreign key is selected
    }
}
