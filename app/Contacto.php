<?php

namespace MultiEmpresa;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
        protected $table = 'contactos';
    
    protected $fillable = ['persona','correo','telefono','cedula','dia_pago','hora_pago','cargo','website','limite_credito','dia_credito','dia_tolerancia','observaciones'];
}
