<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titrem extends Model
{
    protected $guarded = [];
    public function province()
    {
        return $this->belongsTo('App\Province');
    }
    public function operats()
    {
        return $this->belongsTo('App\Operat');
    }
}
