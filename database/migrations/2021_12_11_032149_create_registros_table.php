<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('fotografia');
            $table->string('nombre')->nullable(false);
            $table->string('apellidoP')->nullable(false);
            $table->string('apellidoM')->nullable(false);
            $table->string('direccion')->nullable(false);
            $table->string('nivel');
            $table->string('horario');
            $table->bigInteger('telefono');
            $table->integer('edad');
            $table->string('dias');
            $table->string('correo')->unique();
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
        Schema::dropIfExists('registros');
    }
}
