<?php namespace Pavel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePavelMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('pavel_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pavel_movies_genres');
    }
}
