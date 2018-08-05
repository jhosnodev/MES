<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Tipo_documento extends Model
{
        protected $table = 'tipo_documentos';
    
    protected $fillable = ['documento',];
}
