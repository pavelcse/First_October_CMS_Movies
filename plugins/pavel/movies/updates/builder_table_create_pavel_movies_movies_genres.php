<?php namespace Pavel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePavelMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('pavel_movies_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pavel_movies_movies_genres');
    }
}
