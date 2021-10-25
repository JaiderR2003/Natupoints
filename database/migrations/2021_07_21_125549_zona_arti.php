<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZonaArti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zona_artificial', function (Blueprint $table) {
            $table->integer('id_zona');
            $table->char('Nombre', 40);
            $table->char('Ubicacion', 40);
            $table->text('Descripcion', 200);
            $table->char('Imagen', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zona_artificial');
    }
}

//composer require doctrine/dbal