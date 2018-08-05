<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class FacturaItem extends Model
{
        protected $table = 'factura_items';
    
    protected $fillable = ['id','cantidad','precio','item_id','igv_id','factura_id'];
}
