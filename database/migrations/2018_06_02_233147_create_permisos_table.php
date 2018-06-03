<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('codigo');
            $table->foreign('codigo')->references('codigo')->on('trabajadores')->onDelete('cascade');
            $table->dateTime('salida');
            $table->dateTime('regreso');
            $table->integer('ndias');
            $table->unsignedInteger('id_centro');
            $table->foreign('id_centro')->references('id')->on('centros')->onDelete('cascade');
            $table->unsignedInteger('id_diagnostico');
            $table->foreign('id_diagnostico')->references('id')->on('diagnosticos')->onDelete('cascade');
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
        Schema::dropIfExists('permisos');
    }
}
