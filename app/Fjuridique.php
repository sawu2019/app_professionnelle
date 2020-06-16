<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fjuridique extends Model
{
    protected $guarded = [];

    public function operats()
    {
        return $this->hasMany('App\Operat');
    }
}
