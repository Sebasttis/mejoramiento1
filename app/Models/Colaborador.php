<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    public function Proyectos (){
        return $this->belongsToMany('App\Models\Proyecto');
    }
    public function Pagos (){
        return $this->hasMany('App\Models\Pago');
    }
}
