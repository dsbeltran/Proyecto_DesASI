<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gerente extends Model
{
    protected $fillable = [
        'ger_id',
        'ger_nombre',
        'ger_depar'
    ];
    public $timestamps = false;
}
