<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
        protected $table = 'notas';
    
    protected $fillable = ['fecha_emision','retenciones','estado','sub_total','motivo','tipo_moneda','tipo_documento_id','cliente_id','empresa_id','usuario_id'];
}
