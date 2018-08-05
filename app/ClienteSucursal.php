<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class ClienteSucursal extends Model
{
        protected $table = 'cliente_sucursals';
    
    protected $fillable = ['cliente_id','sucursal_id'];
}
