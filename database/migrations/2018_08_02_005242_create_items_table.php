<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');//
            $table->string('marca');//
            $table->string('familia');//
            $table->string('codigo');//
            $table->string('descripcion');//
            $table->string('peso');//
            $table->float('precio');//
            $table->string('imagen');//
            $table->string('detalle');//
            $table->string('importado')
                    ->default('nacional');//
            $table->string('condicion');
            $table->integer('cantidad_disponible'); //cantidad
            $table->integer('stock_min');
            $table->integer('stock_max');
            $table->string('numero_serie');
            $table->string('medida_id');
            $table->string('linea_negocio_id');//
            $table->string('itemsCol1')->nullable();
            $table->string('itemsCol2')->nullable();
            $table->string('itemsCol3')->nullable();

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
        Schema::dropIfExists('items');
    }
}
