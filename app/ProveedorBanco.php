<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class ProveedorBanco extends Model
{
        protected $table = 'actividad_economicas';
    
    protected $fillable = ['banco_id','proveedor_id'];
}
