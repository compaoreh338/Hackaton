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
        Schema::create('cvtheques', function (Blueprint $table) {
<<<<<<< HEAD
            $table->id();
            $table->unsignedBigInteger('apprenantID');
            $table->string('lien', 255);
            $table->unique(['apprenantId', 'id'], 'uq_apprenant_cv');
=======
            $table->id('cvId');
            $table->unsignedBigInteger('apprenantID');
            $table->string('lien', 255);
            $table->unique(['apprenantId', 'cvId'], 'uq_apprenant_cv');
>>>>>>> 01fd98df2fa14da63519bda6291e0feb271b3247
            $table->foreign('apprenantID')->references('id')->on('Apprenants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('Mentoring', function (Blueprint $table) {
            $table->dropUnique('uq_apprenant_cv');
        });
    }
};
