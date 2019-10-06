<?php namespace Pavel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePavelMovies extends Migration
{
    public function up()
    {
        Schema::create('pavel_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('year');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pavel_movies_');
    }
}
