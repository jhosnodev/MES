<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
        protected $table = 'proyectos';
    
    protected $fillable = ['fecha_inicio','fecha_culminacion','descripcion','observaciones','antecedentes','factura_id','cliente_id','usuario_id'];
}
