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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->enum('project_type', [
                'Bridge',
                'Flyover',
                'Infrastructure',
                'Road',
                'Building',
                'Other'
            ]);
            $table->string('location')->nullable();
            $table->string('river_name')->nullable();
            $table->decimal('length_m', 10, 2)->nullable();
            $table->string('position')->nullable();
            $table->year('project_year')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
