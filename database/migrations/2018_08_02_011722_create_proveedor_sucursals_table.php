<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor_sucursals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sucursal_id');
            $table->string('proveedor_id');
            $table->string('proveedor_sucursalsCol1')->nullable();
            $table->string('proveedor_sucursalsCol2')->nullable();
            $table->string('proveedor_sucursalsCol3')->nullable();
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
        Schema::dropIfExists('proveedor_sucursals');
    }
}
