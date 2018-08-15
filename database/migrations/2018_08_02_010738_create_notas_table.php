<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('fecha_emision');
            $table->string('retenciones'); 
            $table->string('estado'); 
            $table->string('sub_total'); 
            $table->string('motivo'); 
            $table->string('tipo_moneda'); 
            $table->string('tipo_documento_id'); 
            $table->string('cliente_id'); 
            $table->string('empresa_id'); 
            $table->string('usuario_id');
            $table->string('notaCol1')->nullable(); 
            $table->string('notaCol2')->nullable(); 
            $table->string('notaCol3')->nullable(); 
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
        Schema::dropIfExists('notas');
    }
}
