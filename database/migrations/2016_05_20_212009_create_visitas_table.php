<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('visitante_id')->unsigned();
            $table->foreign('visitante_id')->references('id')->on('visitantes')->onDelete('restrict');
            $table->integer('pagina_id')->unsigned();
            $table->foreign('pagina_id')->references('id')->on('paginas')->onDelete('restrict');
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
        Schema::drop('visitas');
    }
}
