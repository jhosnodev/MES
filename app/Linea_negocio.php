<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Linea_negocio extends Model
{
        protected $table = 'actividad_economicas';
    
    protected $fillable = ['actividad_economica',];
}
