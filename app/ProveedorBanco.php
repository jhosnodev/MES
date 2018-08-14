<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class ProveedorBanco extends Model
{
        protected $table = 'proveedor_bancos';
    
    protected $fillable = ['banco_id','proveedor_id'];
}
