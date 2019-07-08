<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgamacionmathorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progamacionmathors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_materia')->unsigned();
            $table->integer('id_docente')->unsigned;
            $table->integer('id_horario')->unsigned;
            $table->text('grupo', 100);
            $table->text('ambiente', 200);
            $table->text('gestion', 100);
            $table->text('cupo_max', 100);

            $table->timestamps();
            //relaciones
            $table->foreign('id_materia')->references('id')->on('materias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
               
           
            
            $table->foreign('id_horario')->references('id')->on('horarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progamacionmathors');
    }
}
