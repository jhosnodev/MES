<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razon_social');
            $table->string('identifiacion');
            $table->string('color_primario');
            $table->string('color_secundario');
            $table->string('direccion');
            $table->string('distrito');
            $table->string('provincia');
            $table->string('pais');
            $table->string('empresaCol1')->nullable();
            $table->string('empresaCol2')->nullable();
            $table->string('empresaCol3')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
