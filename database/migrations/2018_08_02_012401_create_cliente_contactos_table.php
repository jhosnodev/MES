<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente_id');
            $table->string('contacto_id');
            $table->string('cliente_contactoCol1')->nullable();
            $table->string('cliente_contactoCol2')->nullable();
            $table->string('cliente_contactoCol3')->nullable();
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
        Schema::dropIfExists('cliente_contactos');
    }
}
