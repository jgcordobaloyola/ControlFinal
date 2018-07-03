<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisMuestrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisis_muestras', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idAnalisisMuestras'); 
            $table->date('fechaRecepcion'); 
            $table->decimal('temperaturaMuestra', 3, 1); 
            $table->integer('cantidadMuestra');             
            $table->string('rutEmpleadoRecibe', 10);             
            $table->integer('empresa_codigoempresa')->unsigned();
            $table->foreign('empresa_codigoempresa')->
                    references('codigoEmpresa')->on('empresas')->onDelete('cascade');
            
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
        Schema::dropIfExists('analisis_muestras');
    }
}
