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
        Schema::create('caja_logs', function (Blueprint $table) {
            $table->id();
            $table->double('ingreso');
            $table->double('egreso');
            $table->string('descripcion');
            $table->date('fecha');
            $table->unsignedBigInteger('caja_id');
            $table->foreign('caja_id')->references('id')->on('cajas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caja_logs');
    }
};
