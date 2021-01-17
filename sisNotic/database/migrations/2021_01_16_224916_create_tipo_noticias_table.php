<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jornalista')->unsigned()->nullable($value = false);
            $table->string('descricao', 500)->nullable($value = false);
            $table->timestamps();
            $table->foreign('jornalista')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_noticias');
    }
}
