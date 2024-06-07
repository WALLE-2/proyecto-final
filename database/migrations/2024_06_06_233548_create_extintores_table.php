<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtintoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extintores', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('capacidad');
            $table->date('fechafabricacion');
            $table->string('estado', 50);
            $table->unsignedBigInteger('idubicacion');
            $table->unsignedBigInteger('idproveedor');
            $table->unsignedBigInteger('idtipo');
            $table->timestamps();

            $table->foreign('idubicacion')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('idproveedor')->references('id')->on('proveedores')->onDelete('cascade');
            $table->foreign('idtipo')->references('id')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extintores');
    }
}
