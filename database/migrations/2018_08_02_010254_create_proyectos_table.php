<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_inicio');
            $table->date('fecha_culminacion');
            $table->text('descripcion');
            $table->text('observaciones');
            $table->text('antecedentes');
            $table->string('factura_id');
            $table->string('cliente_id');
            $table->string('usuario_id');
            $table->string('proyectoCol1')->nullable();
            $table->string('proyectoCol2')->nullable();
            $table->string('proyectoCol3')->nullable();
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
        Schema::dropIfExists('proyectos');
    }
}
