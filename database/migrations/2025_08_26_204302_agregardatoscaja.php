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
        // Verificar si la tabla existe (opcional)
        if (Schema::hasTable('cajas')) {
            Schema::table('cajas', function (Blueprint $table) {
                // Agregar la columna solo si no existe
                if (!Schema::hasColumn('cajas', 'descripcion')) {
                    $table->string('descripcion')->nullable(); // Puedes quitar nullable si no aplica
                }
            });
        }
    }

    public function down(): void
    {
        Schema::table('cajas', function (Blueprint $table) {
            // Eliminar la columna solo si existe
            if (Schema::hasColumn('cajas', 'descripcion')) {
                $table->dropColumn('descripcion');
            }
        });
    }
};
