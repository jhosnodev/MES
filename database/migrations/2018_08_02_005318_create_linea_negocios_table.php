<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaNegociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_negocios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linea_negocio');
            $table->string('linea_negocioCol1')->nullable();
            $table->string('linea_negocioCol2')->nullable();
            $table->string('linea_negocioCol3')->nullable();
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
        Schema::dropIfExists('linea_negocios');
    }
}
