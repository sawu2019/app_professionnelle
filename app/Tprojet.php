<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tprojet extends Model
{
    protected $guarded = [];
    
    public function operats()
    {
        return $this->belongsTo('App\Operat');
    }
}
