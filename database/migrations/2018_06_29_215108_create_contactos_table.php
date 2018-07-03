<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
               $table->string('rutContacto', 10); 
               $table->string('nombreContacto', 30); 
               $table->string('emailContacto', 45); 
               $table->string('telefonoContacto', 15); 
               $table->integer('Empresa_codigoEmpresa')->unsigned();
               $table->foreign('Empresa_codigoEmpresa')->references('codigoEmpresa')->on('empresas')->onDelete('cascade');
               $table->primary('rutContacto'); 
               //$table->index('empresa_codigoempresa'); 
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
        Schema::dropIfExists('contacto');

    }
}
