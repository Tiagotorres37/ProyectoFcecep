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
            $table->text('descripcion');
            $table->integer('documento_id');
            $table->string('documento_numero');
            $table->integer('fondos_pension_id');
            $table->integer('institucion_id');
            $table->integer('ciudad_id');
            $table->integer('idioma_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

        });
    }
};
