<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Caja_chica extends Model
{
        protected $table = 'caja_chicas';
    
    protected $fillable = ['fecha','trabajador','cliente','descuento_proveedor','tipo_gasto','ingreso','saldo','factura_id','proyecto_id','usuario_id'];
}
