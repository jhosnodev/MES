<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
       protected $table = 'condiciones';
    
    protected $fillable = ['tipo','area','marca','medida_id','descripcion1','descripcion2','descripcion3','fecha_registro','foto','tipo_consulta','responsable','usuario_id','proyecto_id'];
}
