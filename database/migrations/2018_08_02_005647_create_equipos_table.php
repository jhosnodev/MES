<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marca');
            $table->string('familia');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('imagen');
            $table->string('detalle');
            $table->string('importado')->default('NACIONAL')->nullable();
            $table->string('condicion');
            $table->integer('cantidad_disponible'); //cantidad
            $table->string('numero_serie');
            $table->string('equipoCol1')->nullable();
            $table->string('equipoCol2')->nullable();
            $table->string('equipoCol3')->nullable();
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
        Schema::dropIfExists('equipos');
    }
}
