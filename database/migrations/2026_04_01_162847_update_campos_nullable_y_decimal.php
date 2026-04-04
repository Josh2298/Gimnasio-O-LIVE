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
        // PROMOCIONES
        Schema::table('promociones', function (Blueprint $table) {
            $table->decimal('p1persona', 10, 2)->nullable()->change();
            $table->decimal('p2persona', 10, 2)->nullable()->change();
            $table->decimal('p3persona', 10, 2)->nullable()->change();
            $table->decimal('medio_mes', 10, 2)->nullable()->change();
            $table->decimal('trimestral', 10, 2)->nullable()->change();
            $table->decimal('semestral', 10, 2)->nullable()->change();
            $table->decimal('zumba', 10, 2)->nullable()->change();
            $table->decimal('medio_z', 10, 2)->nullable()->change();
        });
        // PRODUCTOS
        Schema::table('productos', function (Blueprint $table) {
            $table->decimal('precio_compra', 10, 2)->nullable()->change();
            $table->decimal('precio_venta', 10, 2)->nullable()->change();
        });
        // VENTAS
        Schema::table('ventas', function (Blueprint $table) {
            $table->decimal('pago_qr', 10, 2)->nullable()->change();
            $table->decimal('pago_e', 10, 2)->nullable()->change();
        });

        // ITEMS
        Schema::table('items', function (Blueprint $table) {
            $table->string('detalle')->nullable()->change();
            $table->decimal('precio', 10, 2)->nullable()->change();
        });
        // CAJAS
        Schema::table('cajas', function (Blueprint $table) {
            $table->string('descripcion')->nullable()->change();    
            $table->decimal('utilidad', 10, 2)->nullable()->change();
            $table->decimal('saldo', 10, 2)->nullable()->change();
        });
        // CAJA_LOGS
        Schema::table('caja_logs', function (Blueprint $table) {
            $table->decimal('ingreso', 10, 2)->nullable()->change();
            $table->decimal('egreso', 10, 2)->nullable()->change();
            $table->string('descripcion')->nullable()->change();
        });

        // MEMBRESIAS
        Schema::table('membresias', function (Blueprint $table) {
            $table->decimal('p_efectivo', 10, 2)->nullable()->change();

            $table->date('fecha_ini')->nullable()->change();
            $table->date('fecha_fin')->nullable()->change();
            $table->string('detalle')->nullable()->change();
            $table->date('ext_ini')->nullable()->change();
            $table->date('ext_fin')->nullable()->change();
            $table->string('detalle_ext')->nullable()->change();
        });

        // ASISTENCIAS
        Schema::table('asistencias', function (Blueprint $table) {
            $table->string('limpieza')->nullable()->change();
            $table->time('hora_sal')->nullable()->change();
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
