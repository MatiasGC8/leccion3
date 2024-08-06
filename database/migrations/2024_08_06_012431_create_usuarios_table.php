<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
      
            $table->id('id_usuario');
            $table->string('nombre_usuario',50); //var50 creo 
            $table->string('contrasena',100);   //var 100
            $table->string('email',100);        //var 100
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
