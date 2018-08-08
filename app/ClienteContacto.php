<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class ClienteContacto extends Model
{
        protected $table = 'cliente_contactos';
    
    protected $fillable = ['cliente_id','contacto_id'];

        public function cliente()
    {
    	return $this->belongsTo('MultiEmpresa\User')
    }
        public function contacto()
    {
    	return $this->belongsTo('MultiEmpresa\User')
    }
}
