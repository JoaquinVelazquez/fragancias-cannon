<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanzamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lanzamientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('orden');
            $table->foreignId('perfume_id');
            $table->timestamps();

            $table->foreign('perfume_id')->references('id')->on('perfumes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lanzamientos');
    }
}
