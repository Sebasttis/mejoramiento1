<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    public function Colaboradors (){
        return $this->belongsToMany('App\Models\Colaborador');
    }
    public function clientes (){
        return $this->hasMany('App\Models\Cliente');
    }
}
