<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permi extends Model
{
    protected $guarded = [];
    
    public function projet()
    {
        return $this->hasMany('App\Projet');
    }
}
