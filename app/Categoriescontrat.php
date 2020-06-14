<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoriescontrat extends Model
{
    protected $guarded = [];
    
    public function contrat()
    {
        return $this->hasMany('App\Contrat');
    }
}
