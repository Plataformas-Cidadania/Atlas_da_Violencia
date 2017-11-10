<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('series', function (Blueprint $table) {
            //1 - quantidade 2 - valor 3 - porcentagem
            //usado como condicional na formatação dos dados Ex: 1.200 (QTD) / 1.200,00 (Valor/Porcentagem)
            $table->integer('unidade')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('series', function (Blueprint $table) {
            $table->dropColumn('unidade');
        });
    }
}
