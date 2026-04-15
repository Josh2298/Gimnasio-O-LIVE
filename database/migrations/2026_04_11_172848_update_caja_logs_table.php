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
        Schema::table('caja_logs', function (Blueprint $table) {

            //agregar ingreso_qr debajo de ingreso_efectivo
            $table->decimal('ingreso_qr', 10, 2)
                  ->nullable()
                  ->after('ingreso_efectivo');

            //agregar user_id y admin_id debajo de caja_id
            $table->unsignedBigInteger('user_id')
                  ->after('caja_id');

            $table->unsignedBigInteger('admin_id')
                  ->after('user_id');

            //claves foráneas (opcional pero recomendado)
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('caja_logs', function (Blueprint $table) {

            //eliminar claves foráneas
            $table->dropForeign(['user_id']);
            $table->dropForeign(['admin_id']);

            //eliminar columnas
            $table->dropColumn(['ingreso_qr', 'user_id', 'admin_id']);
        });
    }
};
