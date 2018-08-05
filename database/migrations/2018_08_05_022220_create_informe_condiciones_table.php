<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeCondicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_condiciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('informe_id');
            $table->string('condiciones_id');
            $table->string('informe_condicionCol1')->nullable();
            $table->string('informe_condicionCol2')->nullable();
            $table->string('informe_condicionCol3')->nullable();
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
        Schema::dropIfExists('informe_condiciones');
    }
}
