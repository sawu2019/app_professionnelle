<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    protected $guarded = [];

    public function operats()
    {
        return $this->hasMany('App\Operat');
    }
}
