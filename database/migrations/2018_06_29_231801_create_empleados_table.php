<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->string('rutEmpleado', 10); 
            $table->string('nombreEmpleado', 50); 
            $table->string('passwordEmpleado', 10); 
            $table->string('categoria', 1); 
            $table->primary('rutEmpleado'); 
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
        Schema::dropIfExists('empleados');
    }
}
