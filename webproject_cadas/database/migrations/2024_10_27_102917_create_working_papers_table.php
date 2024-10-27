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
        Schema::create('working_papers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('authors');
            $table->date('date');
            $table->text('summary');
            $table->string('file_path'); // This is where the download link will point
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('working_papers');
    }
};
