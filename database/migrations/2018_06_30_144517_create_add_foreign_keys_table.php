<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('analisis_muestras', function (Blueprint $table) {
            $table->unsignedInteger('Particular_codigoParticular');
            $table->foreign('Particular_codigoParticular')->
                    references('codigoParticular')->on('particular');
            
            //$table->string('rutEmpleadoRecibe');
            $table->foreign('rutEmpleadoRecibe')->
                    references('rutEmpleado')->on('empleado');            
       
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_foreign_keys');
    }
}
