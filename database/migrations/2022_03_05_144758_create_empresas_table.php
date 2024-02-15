<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cempre', 10)->comment('Codigo de la empresa');
            $table->string('conseem', 10)->nullable()->comment('Consecutivo de la empresa');

            $table->string('nomcomer', 200)->comment('Nombre comercial');
            $table->string('nomsucur', 200)->comment('Nombre sucursal');
            $table->string('ncorto', 20)->comment('Nombre corto de la empresa');
            $table->string('sigla', 100)->comment('Sigla de la empresa');

            $table->string('replegal', 100)->comment('Representante legal');
            $table->string('rasocial', 100)->comment('Razon Social');
            $table->string('ctiide', 2)->comment('Tipo de identificacion');
            $table->string('idEmpre', 12)->comment('Nit o Cedula');
            $table->string('dv', 1)->comment('Codigo verificacion');
            $table->string('email', 40)->comment('Correo electronico');
            $table->string('logo')->comment('Logo de la empresa')->default('sinimagen.png');
            $table->string('dir', 60)->comment('Direccion de la empresa');


            $table->string('tel', 20)->comment('Telefono de la empresa');
            $table->string('tel2', 20)->comment('Telefono 2 de la empresa');

            $table->string('ndepar', 40)->comment('Departamento de la empresa');
            $table->string('nmuni', 40)->comment('Municipio de la empresa');
            
            $table->string('db')->comment('Base de datos');
            $table->tinyInteger('cesdo')->default(1)->comment('Estado');

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
        Schema::dropIfExists('empresas');
    }
}
