<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->integer('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('historia_clinica');
            $table->datetime('fecha_de_nacimineto');
            $table->boolean('esMasculino')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
