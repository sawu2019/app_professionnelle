<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded = [];

    public function operats()
    {
        return $this->hasMany('App\Operat');
    }
    public function zeas()
    {
        return $this->hasMany('App\Zea');
    }
    public function titrems()
    {
        return $this->hasMany('App\Titrem');
    }
}
