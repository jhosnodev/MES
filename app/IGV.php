<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class IGV extends Model
{
       protected $table = 'i_g_vs';
    
    protected $fillable = ['valor','fecha_creacion','fecha_activacion'];
}
