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
        Schema::create('areas_trabajo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->timestamps();
        });

        Schema::create('subareas_trabajo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('area_trabajo_id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('area_trabajo_id')->references('id')->on('areas_trabajo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas_trabajo');
        Schema::dropIfExists('subareas_trabajo');
    }
};
