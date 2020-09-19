<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FlujoDeDinero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flujo_de_dinero', function (Blueprint $table) {
            $table->increments("id")->start_from(0);
            $table->string("flujo");
            $table->string("ingreso");
            $table->string("tipo");
            $table->string("fecha");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExist("flujo_de_dinero");
    }
}