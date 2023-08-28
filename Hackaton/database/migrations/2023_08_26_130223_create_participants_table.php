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
        Schema::create('participants', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
=======
            $table->id('participantId');
>>>>>>> 01fd98df2fa14da63519bda6291e0feb271b3247
            $table->unsignedBigInteger('evenementId');
            $table->unsignedBigInteger('apprenantId');
            $table->foreign('evenementId')->references('id')->on('Evenements')->onDelete('cascade');
            $table->foreign('apprenantId')->references('id')->on('Apprenants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
