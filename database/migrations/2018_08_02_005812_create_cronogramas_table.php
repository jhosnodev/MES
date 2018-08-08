<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCronogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cronogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actividad');
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_culminacion');
            $table->string('informe_id');
            $table->string('cronogramaCol1')->nullable();
            $table->string('cronogramaCol2')->nullable();
            $table->string('cronogramaCol3')->nullable();

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
        Schema::dropIfExists('cronogramas');
    }
}
