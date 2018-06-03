<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsidiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_permiso');
            $table->foreign('id_permiso')->references('id')->on('permisos')->onDelete('cascade');
            $table->enum('estado',['En Tramite','Por Cobrar','Ingreso Cobra Essalud','Cobro Cheque'])->default('En Tramite');
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
        Schema::dropIfExists('subsidios');
    }
}
