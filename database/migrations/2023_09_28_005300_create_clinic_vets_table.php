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
        Schema::create('clinic_vets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('position');
            $table->unsignedBigInteger('clinic_id')->nullable();
            $table->timestamps();

            $table->foreign('clinic_id')->references('id')->on('clinics');        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinic_vets');
    }
};
