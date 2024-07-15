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
        Schema::create('creditos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('razon_social');
            $table->string('RFC');
            $table->string('no_orden');
            $table->integer('dias_restantes');
            $table->string('vehiculo');
            $table->string('modelo');
            $table->year('anio');
            $table->string('placa');
            $table->decimal('anticipo', 10, 2);
            $table->decimal('por_pagar', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('creditos');
    }
};
