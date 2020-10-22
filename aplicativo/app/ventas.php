<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $fillable = [
        'ven_id',
        'cli_id',
        'emp_id',
        'ven_fecha',
        'ven_fechaentrega'
    ];
    public $timestamps = false;
}
