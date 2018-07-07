    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->integer('valor');
            $table->char('promocionar', 1);
            $table->char('oferta', 1);
            $table->string('zona', 20);
            $table->string('imagen', 100);
            $table->string('ubicacion', 30);
            $table->string('propietario_id', 15);
            $table->integer('tipo_inmueble_id')->unsigned();
            $table->integer('tipo_servicio_id')->unsigned();
            $table->foreign('propietario_id')->references('documento')->on('propietarios');
            $table->foreign('tipo_inmueble_id')->references('id')->on('tipo_inmuebles');
            $table->foreign('tipo_servicio_id')->references('id')->on('tipo_servicios');
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
        Schema::dropIfExists('inmuebles');
    }
}
