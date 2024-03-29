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
        Schema::create('adopcions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('animal_id')->references('id')->on('animals')->constrained()->cascadeOnDelete();
            $table->foreignId('usuario_id')->references('id')->on('usuarios')->constrained()->cascadeOnDelete();
            $table->date('Fecha');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopcions');
    }
};
