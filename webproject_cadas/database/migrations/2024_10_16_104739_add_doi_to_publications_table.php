<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDoiToPublicationsTable extends Migration
{
    public function up()
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->string('doi')->nullable(); // Add DOI column
        });
    }

    public function down()
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->dropColumn('doi'); // Remove DOI column
        });
    }
}
