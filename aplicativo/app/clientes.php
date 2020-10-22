<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'cli_id',
        'cli_nombreyapellido',
        'cli_direccion',
        'cli_telefono'
    ];
    public $timestamps = false;
}
