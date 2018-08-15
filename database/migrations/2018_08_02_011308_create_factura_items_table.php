<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->string('precio');
            $table->string('item_id');
            $table->string('igv_id');
            $table->string('factura_id'); 
            $table->string('facturaCol1')->nullable();
            $table->string('facturaCol2')->nullable();
            $table->string('facturaCol3')->nullable();
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
        Schema::dropIfExists('factura_items');
    }
}
