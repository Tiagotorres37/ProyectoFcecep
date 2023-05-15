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
            $table->text('descripcion')->nullable();
            $table->integer('documento_id')->nullable();
            $table->string('documento_numero')->nullable();
            $table->integer('fondos_pension_id')->nullable();
            $table->integer('institucion_id')->nullable();
            $table->integer('ciudad_id')->nullable();
            $table->integer('idioma_id')->nullable();
            $table->date('fecha_de_nacimiento')->nullable();
            $table->integer('edad')->nullable();
            $table->integer('eps_id')->nullable();
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
