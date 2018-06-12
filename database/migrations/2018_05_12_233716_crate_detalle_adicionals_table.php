<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateDetalleAdicionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_adicionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion', 200);
            $table->integer('inmueble_id')->unsigned();
            $table->foreign('inmueble_id')->references('id')->on('inmuebles');
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
        //
    }
}
