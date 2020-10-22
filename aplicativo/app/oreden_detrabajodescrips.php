<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oreden_detrabajodescrip extends Model
{
    protected $fillable = [
        'odes_id',
        'pro_id',
        'ord_id',
        'odes_desc'
    ];
    public $timestamps = false;
}
