<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoAnalisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_analisis', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->increments('id');
            //$table->integer('id_TipoAnalisis')->unsigned(); 
            $table->string('nombre', 45); 
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
        Schema::dropIfExists('tipo_analisis');
    }
}
