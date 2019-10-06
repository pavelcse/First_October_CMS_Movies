<?php namespace Pavel\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePavelContact extends Migration
{
    public function up()
    {
        Schema::table('pavel_contact_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('pavel_contact_', function($table)
        {
            $table->dropColumn('slug');
            
        });
    }
}
