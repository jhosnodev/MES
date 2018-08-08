<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
       protected $fillable = [
        'identificacion','razon_social','activo','website',
        
    ];

    public function contacto()
    {
    	return $this->hasMany('MultiEmpresa\Contacto');
    }


    public function banco()
    {
    	return $this->belongsToMany('MultiEmpresa\Banco');
    }

    public function sucursal()
    {
    	return $this->hasMany('MultiEmpresa\Sucursal');
    }

                
}
