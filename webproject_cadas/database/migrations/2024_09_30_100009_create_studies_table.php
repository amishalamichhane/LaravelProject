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
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');          // Study title
            $table->string('image')->nullable();          // URL for image
            $table->string('data_link')->nullable();      // Link to data
            $table->string('codebook_link')->nullable();  // Link to codebook
            $table->string('questions_link')->nullable(); // Link to questions
            $table->string('report_link')->nullable();    // Link to report
            $table->timestamps();             // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studies');
    }
};
