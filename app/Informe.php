<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
        protected $table = 'informes';
    
    protected $fillable = ['condiciones','asunto','recomendaciones','observaciones','fecha_realizacion','contacto_id','proyecto_id','cliente_id','empresa_id','tipo_documento_id'];

}
