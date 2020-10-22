<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estandar_de_produccion extends Model
{
    protected $fillable = [
        'est_id',
        'mez_id',
        'qui_id',
        'est_nombre',
        'est_descripcion'
    ];
    public $timestamps = false;
}
