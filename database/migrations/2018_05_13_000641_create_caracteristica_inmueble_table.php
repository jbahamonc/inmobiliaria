<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicaInmuebleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristica_inmueble', function (Blueprint $table) {
            $table->integer('caracteristica_id')->unsigned();
            $table->integer('inmueble_id')->unsigned();
            $table->integer('cantidad');
            $table->foreign('caracteristica_id')->references('id')->on('caracteristicas');
            $table->foreign('inmueble_id')->references('id')->on('inmuebles');
            $table->timestamps();
            $table->primary(['caracteristica_id', 'inmueble_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especificacions');
    }
}
