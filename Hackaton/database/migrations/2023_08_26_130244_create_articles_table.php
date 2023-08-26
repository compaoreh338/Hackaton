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
        Schema::create('articles', function (Blueprint $table) {
            $table->id('articleId');
            $table->string('titre', 255);
            $table->text('contenu');
            $table->date('date');
            $table->unsignedBigInteger('entrepriseId');
            $table->foreign('entrepriseId')->references('id')->on('Entreprises')->onDelete('cascade');
            $table->unique(['entrepriseId', 'titre']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};