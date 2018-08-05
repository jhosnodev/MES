<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
        protected $table = 'cronogramas';
    
    protected $fillable = ['actividad','fecha_inicio','fecha_culminacion'];
}
