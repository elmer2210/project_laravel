<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoryAutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository_autor', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_repositorio')->unsigned();
            $table->bigInteger('id_autor')->unsigned();
            $table->timestamps();
            $table->foreign('id_repositorio')->references('id')->on('repositories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_autor')->references('id')->on('autors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repository_autor');
    }
}
