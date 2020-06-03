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
}
