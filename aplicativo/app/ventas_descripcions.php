<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta_descripcion extends Model
{
    protected $fillable = [
        'vdes_id',
        'ven_id',
        'pro_id',
        'vdes_precio',
        'vdes_des'
    ];
    public $timestamps = false;
}
