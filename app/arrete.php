<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class arrete extends Model
{
    protected $guarded = [];

    public function typearrete()
    {
        return $this->belongsTo('App\Typearrete');
    }
}
