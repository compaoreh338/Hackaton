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
            $table->id('mentoringId');
            $table->unsignedBigInteger('entrepriseID');
            $table->text('description');
            $table->unique(['apprenantId', 'mentoringId'], 'uq_apprenant_mentoring');
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
        Schema::table('Mentoring', function (Blueprint $table) {
            $table->dropUnique('uq_apprenant_mentoring');
        });
    }
};
