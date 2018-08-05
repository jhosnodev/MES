<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
       protected $fillable = [
        'identificacion','razon_social','activo','website',
        
    ];///


                
}
