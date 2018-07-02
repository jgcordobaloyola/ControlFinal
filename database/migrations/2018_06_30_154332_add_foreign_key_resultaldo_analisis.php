<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyResultaldoAnalisis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resultado_analises', function (Blueprint $table) {
            //$table->string('rutEmpleadoAnalista');
            $table->foreign('rutEmpleadoAnalista')->references('rutEmpleado')->on('empleado');
            
            //$table->foreign('idAnalisisMuestras')->references('idAnalisisMuestras')->on('analisis_muestras');
            
            $table->foreign('idTipoAnalisis')->references('id')->on('tipo_analises');
            
            
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
