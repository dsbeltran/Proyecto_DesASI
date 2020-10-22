<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = [
        'pro_id',
        'pro_nombre',
        'pro_pvp',
        'pro_pvadistri',
        'pro_descripcion'
    ];
    public $timestamps = false;
}