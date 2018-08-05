<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
        protected $table = 'sucursals';
    
    protected $fillable = ['direccion','distrito','provincia','pais','telefono','principal'];
}
