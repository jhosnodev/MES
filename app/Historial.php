<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
        protected $table = 'historial';
    
    protected $fillable = ['movimiento','descripcion','modulo','usuario_id'];
}
