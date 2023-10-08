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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('studentId')->nullable();
            $table->string('student_name')->nullable();
            $table->string('email')->nullable();
            $table->string('section')->nullable();
            $table->string('class')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('guardian_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
