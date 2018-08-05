<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCajaChicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caja_chicas', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('fecha');
            $table->string('trabajador');
            $table->string('cliente');
            $table->string('descuento_proveedor');
            $table->string('tipo_gasto');
            $table->string('ingreso');
            $table->string('saldo');
            $table->string('factura_id')->nullable();
            $table->string('proyecto_id')->nullable();
            $table->string('usuario_id');
            $table->string('caja_chicaCol1')->nullable();
            $table->string('caja_chicaCol2')->nullable();
            $table->string('caja_chicaCol3')->nullable();
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
        Schema::dropIfExists('caja_chicas');
    }
}
