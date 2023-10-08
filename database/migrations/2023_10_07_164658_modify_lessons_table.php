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
        Schema::table('lessons', function (Blueprint $table) {
            $table->string('file')->nullable()->change();
            $table->string('title')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('date_uploaded')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->string('file')->nullable(false)->change();
            $table->string('title')->nullable(false)->change();
            $table->string('description')->nullable(false)->change();
            $table->string('date_uploaded')->nullable(false)->change();
        });
    }
};
