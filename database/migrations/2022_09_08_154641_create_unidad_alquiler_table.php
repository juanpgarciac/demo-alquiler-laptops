<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_alquiler', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('tipoUA');
            $table->string('marca');
            $table->string('procesador');
            $table->unsignedTinyInteger('generacion');
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->foreign('cliente_id')->references('id')->on('cliente')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('unidad_alquiler');
    }
};
