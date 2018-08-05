<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class ClienteGrupo extends Model
{
        protected $table = 'cliente_grupos';
    
    protected $fillable = ['cliente_id','grupo_id'];
}
