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
        Schema::create('publications', function (Blueprint $table) {
            $table->id(); // Primary key: unique ID for each publication
            $table->string('title'); // Title of the publication
            $table->string('authors'); // Authors of the publication
            $table->string('journal'); // Name of the journal where it's published
            $table->integer('year'); // Year of publication
            $table->text('citation')->nullable(); // Full citation text (optional)
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
