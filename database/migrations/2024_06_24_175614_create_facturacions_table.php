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
        Schema::create('facturacions', function (Blueprint $table) {
            $table->id();
            $table->string('number_factura')->unique();
            $table->string('cliente_id');
            $table->string('fecha_emision');
            $table->string('fecha_vencimiento');
            $table->string('total');
            $table->string('estado');
            $table->string('observacion');
            $table->timestamps();

     //       $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturacions');
    }
};
