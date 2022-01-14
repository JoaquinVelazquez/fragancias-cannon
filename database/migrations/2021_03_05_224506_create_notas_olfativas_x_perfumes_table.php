<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasOlfativasXPerfumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas_olfativas_x_perfumes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("perfume_id")->constrained()->onDelete('cascade');
            $table->foreignId("nota_olfativa_id")->constrained('notas_olfativas_x_perfumes')->onDelete('cascade');

            $table->timestamps();

            $table->unique(['perfume_id','nota_olfativa_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas_olfativas_x_perfumes');
    }
}
