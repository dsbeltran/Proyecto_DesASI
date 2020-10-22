<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maquinaria extends Model
{
    protected $fillable = [
        'mez_id',
        'mez_descripcion',
        'mez_tiemp',
        'mez_nombre'
    ];
    public $timestamps = false;
}
