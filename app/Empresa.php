<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
        protected $table = 'empresas';
    
    protected $fillable = ['razon_social'),'identifiacion','color_primario','color_secundario','direccion','distrito','provincia','pais'];
}
