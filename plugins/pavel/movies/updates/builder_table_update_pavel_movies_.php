<?php namespace Pavel\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePavelMovies extends Migration
{
    public function up()
    {
        Schema::table('pavel_movies_', function($table)
        {
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::table('pavel_movies_', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
