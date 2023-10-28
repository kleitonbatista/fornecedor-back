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

        Schema::create('endereco', function (Blueprint $table) {
            $table->id();
            $table->string('cep',8);
            $table->string('uf',2);
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('complemento')->nullable();
            

        });

        Schema::create('fornecedor', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao');
            $table->timestamp('dataCadastro')->useCurrent();
            $table->boolean('status')->default(true);
            $table->string('urlFoto')->nullable();
            $table->unsignedBigInteger('enderecoId');
            $table->foreign('enderecoId')->references('id')->on('endereco');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
