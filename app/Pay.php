<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $guarded = [];
    
    public function actionnair()
    {
        return $this->hasMany('App\Actionnair');
    }

    public function investisseur()
    {
        return $this->hasMany('App\Investisseur');
    }
}
