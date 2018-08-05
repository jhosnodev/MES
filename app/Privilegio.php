<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
        protected $table = 'privilegios';
    
    protected $fillable = ['modulo','nivel'];
}
