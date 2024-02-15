<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('idModulos');
            $table->foreign('idModulos')->references('idModulos')->on('modulos');
            $table->string('nombre', 120)->comment('Nombre del menu');
            $table->string('url')->comment('url del menu');
            $table->text('icono', 60)->nullable()->comment('icono que tiene ese menu');
            $table->integer('id_menu')->nullable()->comment('Identificador del menu padre');
            $table->boolean('main')->default(true)->comment('Identificador de que el menu es padre de varios menus');
            $table->smallInteger('orden')->nullable()->comment('Orden del menu');
            $table->boolean('cesdo')->default(true)->comment('Estado del menu');
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
        Schema::dropIfExists('menus');
    }
}
