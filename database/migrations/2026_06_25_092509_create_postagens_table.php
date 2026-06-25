<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('postagens', function (Blueprint $table) {
            $table->id('CodPostagem');

            $table->string('Titulo');
            $table->text('Conteudo');

            $table->string('User')->nullable();
            $table->string('Imagem')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('postagens');
    }
};