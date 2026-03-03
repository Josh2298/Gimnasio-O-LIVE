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
        Schema::create('historial_corporals', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('edad');
            $table->double('estatura');
            $table->double('peso');
            $table->double('hombro');
            $table->double('pecho_rep');
            $table->double('pecho_cont');
            $table->double('espalda_rep');
            $table->double('espalda_cont');
            $table->double('brazo_d_rep');
            $table->double('brazo_d_cont');
            $table->double('brazo_i_rep');
            $table->double('brazo_i_cont');
            $table->double('cintura');
            $table->double('cadera');
            $table->double('muslo_d_rep');
            $table->double('muslo_d_cont');
            $table->double('muslo_i_rep');
            $table->double('muslo_i_cont');
            $table->double('panto_d_rep');
            $table->double('panto_d_cont');
            $table->double('panto_i_rep');
            $table->double('panto_i_cont');
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
        Schema::dropIfExists('historial_corporals');
    }
};
