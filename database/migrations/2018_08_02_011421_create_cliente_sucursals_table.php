<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_sucursals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cliente_id');
            $table->string('sucursal_id');
            $table->string('cliente_sucursalCol1')->nullable();
            $table->string('cliente_sucursalCol2')->nullable();
            $table->string('cliente_sucursalCol3')->nullable();
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
        Schema::dropIfExists('cliente_sucursals');
    }
}
