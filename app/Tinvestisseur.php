<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tinvestisseur extends Model
{
    protected $guarded = [];

    public function investisseurs()
    {
        return $this->hasMany('App\Investisseur');
    }
}
