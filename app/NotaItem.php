<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class NotaItem extends Model
{
        protected $table = 'nota_items';
    
    protected $fillable = ['cantidad','precio','item_id','igv_id','nota_id'];
}
