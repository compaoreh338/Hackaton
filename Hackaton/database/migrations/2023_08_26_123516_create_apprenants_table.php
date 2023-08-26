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
        Schema::create('apprenants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userID');
            $table->string('name');
            $table->string('email');
            $table->string('portfolio')->nullable();
            $table->string('videoDemo')->nullable();
            $table->unsignedBigInteger('cohorteId');
            $table->unsignedBigInteger('domaineId');
            $table->timestamps();


            $table->foreign('cohorteId')->references('id')->on('cohortes');
            $table->foreign('domaineId')->references('id')->on('domaines');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprenants');
    }
};
