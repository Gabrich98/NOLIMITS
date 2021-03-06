<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string ('razon_social');
            $table->string ('nombre');
            $table->string ('apellido');
            $table->string ('email');
            $table->string ('localidad');
            $table->string ('direccion');
            $table->integer ('telefono');
            $table->string ('estado');
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
        Schema::dropIfExists('proveedores');
    }
}
