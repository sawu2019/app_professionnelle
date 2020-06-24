<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actionnair extends Model
{
    protected $guarded = [];
    
    public function pay()
    {
        return $this->belongsTo('App\Pay');
    }
}
