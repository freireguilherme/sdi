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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->string('endereço');
            $table->string('telefone');
            $table->string('sexo');
            $table->string('nome_da_mae');
            $table->date('data_nascimento');
            $table->string('cpf');
            $table->string('rg');
            $table->string('rg_orgao_expedidor');
            $table->date('rg_data_emissao');
            $table->string('escolaridade');
            $table->string('vinculo');
            $table->timestamp('email_verifield_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatos');
    }
};
