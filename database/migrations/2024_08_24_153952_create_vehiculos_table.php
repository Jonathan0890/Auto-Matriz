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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('placa');
            $table->string('cliente_id');
            $table->string('year');
            $table->string('color_id');
            $table->string('marca_id');
            $table->string('modelo');
            $table->string('cuerpo_id');
            $table->string('n_serie');
            $table->string('tipo_combustible_id');
            $table->string('tipo_transmision_id');
            $table->string('cilindraje_id');
            $table->string('direccion_hidraulica');
            $table->string('aire_acondicionado');
            $table->string('kilometraje');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
