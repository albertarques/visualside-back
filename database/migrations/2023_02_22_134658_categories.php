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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('direccion');
            $table->string('estilismo');
            $table->string('produccion');
            $table->string('guionaje');
            $table->string('actor');
            $table->string('actriz');
            $table->string('operadores de camara, luces y equipo');
            $table->string('montajista, atrezzista');
            $table->timestamps();
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
