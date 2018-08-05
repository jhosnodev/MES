<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_actividad');
            $table->string('descripcion');
            $table->string('entrada');
            $table->float('costo');
            $table->string('tipo_moneda');
            $table->float('tasa_cambio')->nullable();
            $table->string('detalle');
            $table->string('observaciones');
            $table->string('proveedor_id')->nullable();
            $table->string('usuario_id');
            $table->string('factura_id')->nullable();
            $table->string('estado_cuentasCol1')->nullable();
            $table->string('estado_cuentasCol2')->nullable();
            $table->string('estado_cuentasCol3')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_cuentas');
    }
}
