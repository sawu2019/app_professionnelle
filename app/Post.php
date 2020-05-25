<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[

        'titre',
        'description',
        'type_ar',
        'annees',
        'fichier',


    ];
}
