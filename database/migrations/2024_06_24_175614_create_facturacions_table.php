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
            $table->string('factura');
            $table->string('fecha');
            $table->string('total');
            $table->string('estado');
            $table->string('user_id');
            $table->string('cliente_id');
            $table->string('servicio_id');
            $table->string('sede_id');
            $table->string('estado_id');
            $table->string('observacion');
            $table->string('imagen');
            $table->timestamps();
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
