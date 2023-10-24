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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente')->autoIncrement();
            $table->string('nombre')->nullable(false);
            $table->string('apellido')->nullable(false);
            $table->string('genero');
            $table->date('fecha_nacimiento');
            $table->string('telefono',20);
            $table->string('correo');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('pais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
