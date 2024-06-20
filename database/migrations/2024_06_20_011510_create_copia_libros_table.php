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
        Schema::create('copia_libros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estanteria_id')->constrained()->onDelete('cascade');
            $table->string('nombre');
            $table->string('numeroCopia');
            $table->string('autor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copia_libros');
    }
};
