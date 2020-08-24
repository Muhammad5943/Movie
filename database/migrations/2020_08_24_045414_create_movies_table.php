<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
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
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('director')->nullable();
            $table->string('writer')->nullable();
            $table->string('actor')->nullable();
            $table->string('country')->nullable();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('quality_id');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('year_id');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
}
