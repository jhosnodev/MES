<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('persona');//nombre de Persona
            $table->string('correo');
            $table->string('telefono')->nullable();
            $table->string('cedula');
            $table->string('dia_pago');
            $table->string('hora_pago');
            $table->string('cargo');
            $table->string('website');
            $table->string('limite_credito');//Redundante con table banco?????
            $table->string('dia_credito');//Redundante con table banco?????
            $table->string('dia_tolerancia');
            $table->string('observaciones');
            $table->string('contactosCol1')->nullable();
            $table->string('contactosCol2')->nullable();
            $table->string('contactosCol3')->nullable();
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
        Schema::dropIfExists('contactos');
    }
}
