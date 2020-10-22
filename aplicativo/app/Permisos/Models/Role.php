<?php

namespace App\Permisos\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // es: desde aqui
    protected $fillable = [
        'name', 'slug', 'description','full-access'
    ];
    public function users(){
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    public function permissions(){
        return $this->belongsToMany('App\Permisos\Models\Permission')->withTimestamps();
    }
    
}
