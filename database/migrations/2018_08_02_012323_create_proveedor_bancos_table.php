<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorBancosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_bancos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banco_id');
            $table->string('proveedor_id');
            $table->string('proveedor_bancosCol1')->nullable();
            $table->string('proveedor_bancosCol2')->nullable();
            $table->string('proveedor_bancosCol3')->nullable();
            
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
        Schema::dropIfExists('proveedor_bancos');
    }
}
