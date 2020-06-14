<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operat extends Model
{
    protected $guarded = [];

    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    public function secteur()
    {
        return $this->belongsTo('App\Secteur');
    }
    public function filiere()
    {
        return $this->belongsTo('App\Filiere');
    }
    public function arretes()
    {
        return $this->hasMany('App\Operat');
    }
    
}

