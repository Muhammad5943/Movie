<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function ( Blueprint $table ) {
            $table->foreign('guest_id')->references('id')->on('guests')->OnDelete('cascade');
            $table->foreign('movie_id')->references('id')->on('movies')->OnDelete('cascade');
        });

        Schema::table('movies', function ( Blueprint $table ) {
            $table->foreign('quality_id')->references('id')->on('qualities')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('year_id')->references('id')->on('years')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
