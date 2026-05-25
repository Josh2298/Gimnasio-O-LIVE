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
        Schema::table('membresias', function (Blueprint $table) {
            // PROMOCION
            /* $table->unsignedBigInteger('promocion_id')
            ->nullable()
            ->after('user_id');

            // PERSONAS
            $table->integer('cantidad_personas')
            ->default(1)
            ->after('disciplina');

            // FOREIGN KEY
            $table->foreign('promocion_id')
            ->references('id')
            ->on('promociones')
            ->onDelete('set null'); */
            $table->decimal('monto_total',10,2)
            ->default(0)
            ->after('p_qr');
    });
        
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
