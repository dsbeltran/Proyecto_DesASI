<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oreden_detrabajo extends Model
{
    protected $fillable = [
        'ord_id',
        'emp_id',
        'est_id',
        'ord_fecha_ini',
        'ord_fecha_fin'
    ];
    public $timestamps = false;
}
