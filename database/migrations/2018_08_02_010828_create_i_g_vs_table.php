<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIGVsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_g_vs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('valor');
            $table->datetime('fecha_creacion');
            $table->datetime('fecha_activacion');
            $table->string('igvCol1')->nullable();
            $table->string('igvCol2')->nullable();
            $table->string('igvCol3')->nullable();
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
        Schema::dropIfExists('i_g_vs');
    }
}
