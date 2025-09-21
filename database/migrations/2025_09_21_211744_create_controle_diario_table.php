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
        Schema::create('controle_diario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('funcionario_motorista_id')->constrained('funcionario');
            $table->foreignId('funcionario_gestor_id')->constrained('funcionario');
            $table->foreignId('funcao_id')->constrained('funcao');
            $table->foreignId('status_id')->constrained('status');
            $table->date('retorno_ferias');
            $table->foreignId('status_viagem_id')->constrained('status');
            $table->boolean('hora_extra')->default(false);
            $table->text('justificativa_hora_extra')->nullable();
            $table->foreignId('alteracao_status_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controle_diario');
    }
};
