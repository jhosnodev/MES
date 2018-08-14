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
    	
        return $this->belongsToMany('\MultiEmpresa\Contacto','proveedor_contactos')
            ->withPivot('contacto_id');
            
    }

    public function banco()
    {
    	return $this->belongsToMany('\MultiEmpresa\Banco','proveedor_bancos')
            ->withPivot('banco_id');
    }

    public function sucursal()
    {
    	return $this->belongsToMany('\MultiEmpresa\Sucursal','proveedor_sucursals')
            ->withPivot('sucursal_id');
    }

                
}
