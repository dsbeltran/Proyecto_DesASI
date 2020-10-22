<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $fillable = [
        'emp_id',
        'emp_nombreyapellido',
        'empl_direccion',
        'ger_id'
    ];
    public $timestamps = false;
}
