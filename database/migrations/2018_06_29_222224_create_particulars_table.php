<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particulars', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->increments('codigoParticular'); 
            $table->string('rutParticular', 45); 
            $table->string('passwordParticular', 45); 
            $table->string('nombreParticular', 45); 
            $table->string('direccionParticular', 45); 
            $table->string('emailParticular', 100); 
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
        Schema::dropIfExists('particulars');
    }
}
