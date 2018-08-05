<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('direccion');
            $table->string('distrito');
            $table->string('provincia');
            $table->string('pais');
            $table->string('telefono');
            $table->boolean('principal');
            $table->string('sucursalsCol1');
            $table->string('sucursalsCol2');
            $table->string('sucursalsCol3');

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
        Schema::dropIfExists('sucursals');
    }
}
