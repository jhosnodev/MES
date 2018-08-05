<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadEconomicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_economicas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actividad_economica');
            $table->string('actividad_economicaCol1')->nullable();
            $table->string('actividad_economicaCol2')->nullable();
            $table->string('actividad_economicaCol3')->nullable();
            
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
        Schema::dropIfExists('actividad_economicas');
    }
}
