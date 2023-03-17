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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('especie_id')->references('id')->on('especies')->constrained()->cascadeOnDelete();   
            $table->foreignId('raza_id')->references('id')->on('razas')->constrained()->cascadeOnDelete();
            $table->string('Nombre'); 
            $table->string('Sexo');
            $table->string('Foto');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
