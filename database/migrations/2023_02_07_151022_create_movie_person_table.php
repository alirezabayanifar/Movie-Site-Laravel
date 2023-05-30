<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_person', function (Blueprint $table) {
            $table->foreignId('movie_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('person_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->enum('type', ['actor', 'writer', 'director'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_movie');
    }
};
