<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuntosDeVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos_de_venta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('contacto');
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->timestamps();

            $table->foreign('tipo_id')->references('id')->on('tipos_punto_de_venta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puntos_de_venta');
    }
}
