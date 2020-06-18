<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zea extends Model
{
    protected $guarded = [];

    public function province()
    {
        return $this->belongsTo('App\Province');
    }
}
