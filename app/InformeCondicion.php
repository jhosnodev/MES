<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class InformeCondicion extends Model
{
        protected $table = 'informe_condiciones';
    
    protected $fillable = ['informe_id','condiciones_id'];
}
