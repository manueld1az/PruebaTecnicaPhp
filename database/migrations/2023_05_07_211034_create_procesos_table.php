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
        Schema::create('procesos', function (Blueprint $table) {
            $table->id('codigo_proceso');
            $table->text('objeto');
            $table->text('actividad')->nullable();
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->time('hora_inicio');
            $table->date('fecha_cierre');
            $table->time('hora_cierre');
            $table->integer('presupuesto');
            $table->text('moneda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procesos');
    }
};
