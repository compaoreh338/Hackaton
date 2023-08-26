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
            $table->id();
            $table->unsignedBigInteger('apprenantID');
            $table->string('lien', 255);
            $table->unique(['apprenantId', 'id'], 'uq_apprenant_cv');
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
