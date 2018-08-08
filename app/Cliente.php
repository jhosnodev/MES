<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
        protected $table = 'clientes';
    
    protected $fillable = ['identifiacion','razon_social','estado','fecha_incorporacion','ejecutivo_ventas_id'];

        public function user()
    {
    	return $this->belongsTo('MultiEmpresa\User')
    }
}
