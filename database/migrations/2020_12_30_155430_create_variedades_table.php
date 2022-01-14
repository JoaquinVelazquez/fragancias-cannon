<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variedades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perfume_id')->constrained()->onDelete('cascade');
            $table->string('codigo_catalogo');
            $table->string('codigo_ean')->nullable();
            $table->double('precio', 13, 2)->default(0);
            $table->integer('orden');
            $table->tinyInteger('activo');
            $table->tinyInteger('limited');
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
        Schema::dropIfExists('variedades');
    }
}
