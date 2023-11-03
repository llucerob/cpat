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
        Schema::create('registros_amp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registro_id')
                    ->constrained('registros')
                    ->onDelete('cascade');
            $table->foreignId('pregunta_id')
                    ->constrained('preguntas')
                    ->onDelete('cascade');
            $table->longtext('respuesta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros_amp');
    }
};
