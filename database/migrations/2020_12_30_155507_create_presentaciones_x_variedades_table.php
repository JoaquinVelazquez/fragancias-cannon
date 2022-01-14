<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentacionesXVariedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentaciones_x_variedades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('presentacion_id');
            $table->foreignId('variedad_id');
            $table->boolean('vap');

            $table->string('medida');
            $table->integer('vol');
            $table->timestamps();

            $table->foreign('presentacion_id')->references('id')->on('presentaciones')->onDelete('cascade');
            $table->foreign('variedad_id')->references('id')->on('variedades')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentaciones_x_variedades');
    }
}
