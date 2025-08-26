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
        Schema::create('membresias', function (Blueprint $table) {
            $table->id();
            $table->string('plan');
            $table->double('pago_e');
            $table->double('pago_qr');
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->string('detalle');
            $table->string('disciplina');
            $table->date('ext_ini');
            $table->date('ext_fin');
            $table->string('detalle_ext');
            $table->unsignedBigInteger('promocion_id');
            $table->foreign('promocion_id')->references('id')->on('promociones')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membresias');
    }
};
