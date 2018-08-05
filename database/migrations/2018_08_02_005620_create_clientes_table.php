<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identifiacion');
            $table->string('razon_social');
            $table->boolean('estado'); //Activo o inactivo
            $table->datetime('fecha_incorporacion');
            $table->string('ejecutivo_ventas_id');
            $table->string('actividad_economica_id');
            $table->string('clienteol1')->nullable();
            $table->string('clienteol2')->nullable();
            $table->string('clienteol3')->nullable();
        
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
        Schema::dropIfExists('clientes');
    }
}
