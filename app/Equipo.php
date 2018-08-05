<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
        protected $table = 'equipos';
    
    protected $fillable = ['tipo','marca','familia','codigo','descripcion','medida','peso','precio','imagen','detalle','importado','condicion','cantidad_disponible','stock_min','stock_max','numero_serie','fecha_incorporacion','medida_id','linea_negocia_id'];
}
