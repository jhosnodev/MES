<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class ProveedorContacto extends Model
{
        protected $table = 'proveedor_contactos';
    
    protected $fillable = ['proveedor_id','contacto_id'];
}
