<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramacionLabestusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacion_labestus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('id_materia_lab');
            $table->text('id_usu_estudiante');
            $table->integer('numero_recibo');
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
        Schema::dropIfExists('programacion_labestus');
    }
}
