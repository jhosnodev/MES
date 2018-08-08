<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificacion')->unique();
            $table->string('razon_social');
            $table->boolean('activo')->default(1);//boolean. Saber estatus. Activo o no
            $table->string('website');
            $table->string('proveedorsCol1')->nullable();
            $table->string('proveedorsCol2')->nullable();
            $table->string('proveedorsCol3')->nullable();
            
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
        Schema::dropIfExists('proveedors');
    }
}
