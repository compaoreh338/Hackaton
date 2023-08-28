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
        Schema::create('mentorings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entrepriseID');
            $table->text('description');
            $table->string('creneauHoraire', 255);
            $table->foreign('entrepriseId')->references('id')->on('Entreprises')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('mentorings');
    }
};
