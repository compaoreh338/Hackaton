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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apprenantId');
            $table->text('description');
            $table->foreign('apprenantId')->references('id')->on('Apprenants')->onDelete('cascade');
            $table->unique(['apprenantId', 'id'], 'uq_apprenant_service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('Mentoring', function (Blueprint $table) {
            $table->dropUnique('uq_apprenant_service');
        });
    }
};
