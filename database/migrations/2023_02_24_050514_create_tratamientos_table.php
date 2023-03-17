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
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('animal_id')->references('id')->on('animals')->constrained()->cascadeOnDelete();
            $table->foreignId('procedimiento_id')->references('id')->on('procedimientos')->constrained()->cascadeOnDelete();
            $table->date('Fecha');
            $table->foreignId('usuario_id')->references('id')->on('usuarios')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tratamientos');
    }
};
