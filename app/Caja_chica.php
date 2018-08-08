<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Caja_chica extends Model
{
        protected $table = 'caja_chicas';
    
    protected $fillable = ['fecha','trabajador','cliente','descuento_proveedor','tipo_gasto','ingreso','saldo','factura_id','proyecto_id','usuario_id'];

    public function user()
    {
    	return $this->belongsTo('MultiEmpresa\User')
    }
    public function factura()
    {
    	return $this->belongsTo('MultiEmpresa\Factura')
    }
    public function proyecto()
    {
    	return $this->belongsTo('MultiEmpresa\Proyecto')
    }
    

}
