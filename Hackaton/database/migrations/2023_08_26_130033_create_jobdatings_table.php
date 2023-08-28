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
        Schema::create('jobdatings', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
=======
            $table->id('jobdatingId');
>>>>>>> 01fd98df2fa14da63519bda6291e0feb271b3247
            $table->unsignedBigInteger('entrepriseId');
            $table->text('description');
            $table->string('lienVisio', 255);
            $table->foreign('entrepriseId')->references('id')->on('Entreprises')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobdatings');
    }
};
