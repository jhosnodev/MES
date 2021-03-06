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
            $table->string('distrito')->nullable();
            $table->string('provincia')->nullable();
            $table->string('pais');
            $table->string('telefono');
            $table->string('tipo_direccion');
            $table->string('sucursalsCol1')->nullable();
            $table->string('sucursalsCol2')->nullable();
            $table->string('sucursalsCol3')->nullable();

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
