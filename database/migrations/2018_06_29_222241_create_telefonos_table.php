<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefono', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->increments('idTelefono'); 
            $table->string('numeroTelefono', 15); 
            
            $table->integer('Particular_codigoParticular')->unsigned();
            $table->foreign('Particular_codigoParticular')->references('codigoParticular')->on('particular')->onDelete('cascade');
            
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
        Schema::dropIfExists('telefonos');
    }
}
