<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table = 'bancos';
    
    protected $fillable = ['nombre','cta_cte_s','cta_cte_us','limite_credito'];
}
