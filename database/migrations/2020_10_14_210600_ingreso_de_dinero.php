<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngresoDeDinero extends Migration
{
    public function up()
    {
        Schema::create('ingreso_de_dinero', function (Blueprint $table) {
            $table->increments("id")->start_from(0);
            $table->integer("ingreso");
            $table->string("tipo");
            $table->string("fecha");
        });
    }

    public function down()
    {
        schema::dropIfExist("ingreso_de_dinero");
    }
}
