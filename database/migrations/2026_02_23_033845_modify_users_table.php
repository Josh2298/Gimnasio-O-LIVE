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
        Schema::table('users', function (Blueprint $table) {
            $table->string('antecedentes')->nullable();
            $table->string('medicamentos')->nullable();
            $table->string('tratamientos')->nullable();

            $table->dropColumn('username');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable();
            $table->dropColumn([
                'antecedentes',
                'medicamentos',
                'tratamientos'
            ]);
        });
    }
};
