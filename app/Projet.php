<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $guarded = [];

    public function permi()
    {
        return $this->belongsTo('App\Permi');
    }

    public function stade()
    {
        return $this->belongsTo('App\Stade');
    }

    public function tprojet()
    {
        return $this->belongsTo('App\Tprojet');
    }
    
    public function operats()
    {
        return $this->hasMany('App\Operat');
    }
}
