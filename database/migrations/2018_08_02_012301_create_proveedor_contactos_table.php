<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_contactos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proveedor_id');
            $table->string('contacto_id');
            $table->string('proveedor_contactosCol1')->nullable();
            $table->string('proveedor_contactosCol2')->nullable();
            $table->string('proveedor_contactosCol3')->nullable();
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
        Schema::dropIfExists('proveedor_contactos');
    }
}
