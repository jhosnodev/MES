<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
        protected $table = 'facturas';
    
    protected $fillable = ['fecha_emision','retenciones','estado','sub_total','motivo','tipo_moneda','tipo_documento_id','cliente_id','empresa_id','usuario_id'];
}
