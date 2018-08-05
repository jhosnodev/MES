<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('condiciones');
            $table->string('asunto');
            $table->string('recomendaciones');
            $table->string('observaciones');
            $table->datetime('fecha_realizacion');
            $table->string('contacto_id');
            $table->string('proyecto_id');
            $table->string('cliente_id');
            $table->string('empresa_id');
            $table->string('tipo_documento_id');
            $table->string('informeCol1')->nullable();
            $table->string('informeCol2')->nullable();
            $table->string('informeCol3')->nullable();
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
        Schema::dropIfExists('informes');
    }
}
