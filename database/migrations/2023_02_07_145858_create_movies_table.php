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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('imdb_id')->unique();
            $table->string('trailer')->nullable();
            $table->string('video')->nullable();
            $table->string('runtime')->nullable();
            $table->char('year');
            $table->char('rated')->nullable();
            $table->dateTime('released')->nullable();
            $table->text('plot');
            $table->string('language')->nullable();
            $table->string('awards')->nullable();
            $table->string('poster')->nullable();
            $table->string('meta_score')->nullable();
            $table->string('imdb_rating')->nullable();
            $table->string('imdb_votes')->nullable();
            $table->enum('type', ['movie', 'series', 'episode']);
            $table->dateTime('dvd')->nullable();
            $table->string('box_office')->nullable();
            $table->string('production')->nullable();
            $table->string('website')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
