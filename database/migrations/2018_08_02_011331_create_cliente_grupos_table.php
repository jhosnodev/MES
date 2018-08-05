<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente_id');
            $table->string('grupo_id');
            $table->string('cliente_grupoCol1')->nullable();
            $table->string('cliente_grupoCol2')->nullable();
            $table->string('cliente_grupoCol3')->nullable();
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
        Schema::dropIfExists('cliente_grupos');
    }
}
