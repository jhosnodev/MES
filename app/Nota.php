<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
        protected $table = 'actividad_economicas';
    
    protected $fillable = ['actividad_economica',];
}
