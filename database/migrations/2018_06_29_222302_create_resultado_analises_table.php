<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadoAnalisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultado_analisis', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->integer('idTipoAnalisis')->unsigned(); 
            $table->integer('idAnalisisMuestras'); 
            $table->date('fechaRegistro'); 
            $table->integer('PPM'); 
            $table->boolean('estado');
            $table->string('rutEmpleadoAnalista', 10)->default(null); 
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
        Schema::dropIfExists('resultado_analises');
    }
}
