<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jornalista')->unsigned()->nullable($value = false);
            $table->bigInteger('tipo')->unsigned()->nullable($value = false);
            $table->string('titulo', 500)->nullable($value = false);
            $table->string('descricao', 5000)->nullable($value = false);
            $table->string('corpon', 5000)->nullable($value = false);
            $table->string('link', 500)->nullable();
            $table->timestamps();
            $table->foreign('jornalista')->references('id')->on('users');
            $table->foreign('tipo')->references('id')->on('tipo_noticias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
