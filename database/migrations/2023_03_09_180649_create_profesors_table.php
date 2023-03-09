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
        Schema::create('profesors', function (Blueprint $table) {
            $table->id();
            $table->string("contrasena");
            $table->string("primerNombre");
            $table->string("segundoNombre");
            $table->string("apellidoPaterno");
            $table->string("apellidoMaterno");
            $table->string("genero");
            $table->string("telefono");
            $table->string("correoElectronico");
            $table->string("cursos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesors');
    }
};
