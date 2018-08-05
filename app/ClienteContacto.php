<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class ClienteContacto extends Model
{
        protected $table = 'cliente_contactos';
    
    protected $fillable = ['cliente_id','contacto_id'];
}
