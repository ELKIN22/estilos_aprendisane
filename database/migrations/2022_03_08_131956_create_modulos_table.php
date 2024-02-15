<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->integer('idModulos')->comment('Id del Modulo');
            $table->primary('idModulos');
            $table->string('nmodulo', 60)->comment('Nombre del modulo');
            $table->tinyInteger('orden')->nullable()->comment('Orden de los modulos');
            $table->string('icono', 60)->nullable()->comment('Icono del modulo');
            $table->string('color', 60)->nullable()->comment('Color del modulo');
            $table->string('detalle', 60)->nullable()->comment('Texto descriptivo del modulo');
            //$table->integer('tipo_modulos_id')->comment('Foranea del tipo de modulo');
            //$table->foreign('tipo_modulos_id')->references('id')->on('tipo_modulos');
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
        Schema::dropIfExists('modulos');
    }
}
