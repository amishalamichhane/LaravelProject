<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->string('url')->nullable(); // Add the 'url' column
        });
    }

    public function down()
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->dropColumn('url'); // Rollback the 'url' column
        });
    }
};
