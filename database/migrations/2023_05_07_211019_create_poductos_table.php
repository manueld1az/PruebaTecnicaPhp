<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('codigo_producto');
            $table->string('nombre_producto');
            $table->unsignedBigInteger('segmento');
            $table->unsignedBigInteger('familia');
            $table->unsignedBigInteger('clase');
            $table->timestamps();

            $table->foreign('segmento')->references('codigo_segmento')->on('segmentos');
            $table->foreign('familia')->references('codigo_familia')->on('familias');
            $table->foreign('clase')->references('codigo_clase')->on('clases');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poductos');
    }
};
