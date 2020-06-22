<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investisseur extends Model
{
    protected $guarded = [];

    public function tinvestisseur()
    {
        return $this->belongsTo('App\Tinvestisseur');
    }
}
