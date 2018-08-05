<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
       protected $table = 'medidas';
    
    protected $fillable = ['unidad','detalle'];
}
