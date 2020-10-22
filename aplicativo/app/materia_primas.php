<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia_prima extends Model
{
    protected $fillable = [
        'qui_id',
        'qui_nombre',
        'qui_descrip',
        'qui_preciocompra'
    ];
    public $timestamps = false;
}
