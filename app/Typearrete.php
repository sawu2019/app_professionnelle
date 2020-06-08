<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typearrete extends Model
{
    protected $guarded = [];

    public function arretes()
    {
        return $this->hasMany('App\Arrete');
    }
}
