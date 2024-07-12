<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    public function Colaborador (){
        return $this->belongsTo('App\Models\Colaborador');
    }
    public function Tipopagos (){
        return $this->hasMany('App\Models\Tipopago');
    }
}
