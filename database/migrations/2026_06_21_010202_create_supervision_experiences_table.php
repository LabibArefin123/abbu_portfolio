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

            $table->string('duration');

            $table->string('location')->nullable();

            $table->longText('description');

            $table->longText('responsibilities')->nullable();

            $table->integer('sort_order')->default(0);

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
