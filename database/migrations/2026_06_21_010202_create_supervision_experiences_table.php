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
        Schema::create('supervision_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('organization')->nullable();
            $table->string('description')->nullable();
            $table->longText('bridges')->nullable();
            $table->longText('responsibilities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervision_experiences');
    }
};
