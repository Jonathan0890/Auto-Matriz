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
        Schema::create('orden_servicios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('razon_social');
            $table->string('estado');
            $table->string('no_orden');
            $table->string('vehiculo');
            $table->string('modelo');
            $table->year('anio');
            $table->string('placa');
            $table->text('reporte_cliente');
            $table->integer('kilometraje');
            $table->string('no_economico')->nullable();
            $table->decimal('sub_total', 10, 2);
            $table->decimal('impuestos', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_servicios');
    }
};
