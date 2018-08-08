<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condiciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('area');
            $table->string('marca');
            $table->string('medida_id');
            $table->text('descripcion1');
            $table->text('descripcion2');
            $table->text('descripcion3');
            $table->datetime('fecha_registro');
            $table->string('foto');
            $table->string('tipo_consulta'); //si es un registro previo al MP o no
            $table->string('responsable');
            $table->string('usuario_id');
            $table->string('proyecto_id');
            $table->string('condicionesCol1')->nullable();
            $table->string('condicionesCol2')->nullable();
            $table->string('condicionesCol3')->nullable();
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
        Schema::dropIfExists('condiciones');
    }
}
