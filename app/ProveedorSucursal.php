<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class ProveedorSucursal extends Model
{
        protected $table = 'proveedor_sucursals';
    
    protected $fillable = ['sucursal_id','proveedor_id'];
}
