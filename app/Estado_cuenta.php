<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Estado_cuenta extends Model
{
        protected $table = 'estado_cuentas';
    
    protected $fillable = ['fecha_actividad','descripcion','entrada','costo','tipo_moneda','tasa_cambio','detalle','observaciones','proveedor_id','usuario_id','factura_id'];
}
