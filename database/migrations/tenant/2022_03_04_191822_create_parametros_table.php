<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->increments('idParametros')->comment('Identificador del parametro');
            $table->string('CodigoParametro', 45)->nullable()->comment('Codigo del parametro');
            $table->string('NombreParametro', 50)->nullable()->comment('Nombre del parametro');
            $table->integer('Value_Int')->nullable()->comment('Valor entero del paramentro');
            $table->text('Value_Text')->nullable()->comment('Valor de texto del parametro');
            $table->dateTime('Value_Date')->nullable()->comment('Valor de fecha y hora del parametro');
            $table->boolean('Value_Bool')->nullable()->default(true)->comment('Valor booleano del parametro');
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
        Schema::dropIfExists('parametros');
    }
}
