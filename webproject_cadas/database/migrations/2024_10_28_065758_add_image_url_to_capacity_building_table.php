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
        Schema::table('capacity_building', function (Blueprint $table) {
            $table->json('image_urls')->nullable();  // Add the image_url column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('capacity_building', function (Blueprint $table) {
            $table->dropColumn('image_urls');  // Remove the image_url column
        });
    }
};
