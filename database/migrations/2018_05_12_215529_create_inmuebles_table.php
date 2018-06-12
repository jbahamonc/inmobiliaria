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
            $table->string('imagen', 20);
            $table->string('id_propietario', 15);
            $table->integer('id_tipo_inmueble')->unsigned();
            $table->integer('id_tipo_servicio')->unsigned();
            $table->foreign('id_propietario')->references('documento')->on('propietarios');
            $table->foreign('id_tipo_inmueble')->references('id')->on('tipo_inmuebles');
            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicios');
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
