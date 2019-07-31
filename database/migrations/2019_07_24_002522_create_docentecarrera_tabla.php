<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentecarreraTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentecarrera', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idDocente')->unsigned();
            $table->foreign('idDocente')->references('id')->on('docentes');
            $table->integer('idCarrera')->unsigned();
            $table->foreign('idCarrera')->references('id')->on('catcarrera');

            
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
        Schema::dropIfExists('docentecarrera');
    }
}
