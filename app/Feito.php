<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feito extends Model
{
    public function personas()
    {
        return $this->belongsToMany('App\Persona', 'persona_feito');
    }
}
