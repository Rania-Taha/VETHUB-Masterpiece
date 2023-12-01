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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->enum('status', ['active','inactive'])->default('active');
            $table->unsignedBigInteger('clinic_id')->nullable();
            $table->timestamps();

            $table->foreign('clinic_id')->references('id')->on('clinics');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
