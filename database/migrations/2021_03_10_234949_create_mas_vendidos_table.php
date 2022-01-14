<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasVendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mas_vendidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perfume_id')->unique();
            $table->integer('orden');
            $table->timestamps();

            $table->foreign('perfume_id')->references('id')->on('perfumes')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mas_vendidos');
    }
}
