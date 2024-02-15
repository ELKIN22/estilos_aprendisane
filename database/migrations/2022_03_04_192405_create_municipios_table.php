<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->string('cciu', 5)->comment('codigo');
            $table->string('nciu', 50)->comment('nombre');
            $table->string('dep_cdep', 5)->comment('codigo departamento');
            $table->primary('cciu');
            $table->foreign('dep_cdep')->references('cdep')->on('departamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipios');
    }
}
