<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepositoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repositories', function (Blueprint $table) {
            $table->id();
            $table->string('tema');
            $table->string('problema');
            $table->string('resumen');
            $table->base64_encode('archivo_pdf');
            $table->bigInteger('id_carrera');
            $table->bigInteger('id_tutor');
            $table->bigInteger('id_categoria');
            $table->timestamps();
            $table->foreign('id_tutor')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_carrera')->references('id')->on('specialities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_categoria')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repositories');
    }
}
