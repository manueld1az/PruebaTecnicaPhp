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
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id('codigo_oferta');
            $table->unsignedBigInteger('creador');
            $table->unsignedBigInteger('proceso');
            $table->text('actividad')->nullable();
            $table->enum('estado', ['ACTIVO', 'PUBLICADO', 'EVALUACION']);
            $table->timestamps();

            $table->foreign('proceso')->references('codigo_proceso')->on('procesos');
            $table->foreign('creador')->references('codigo_creador')->on('creadores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ofertas');
    }
};
