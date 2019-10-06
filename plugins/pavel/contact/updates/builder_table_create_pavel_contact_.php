<?php namespace Pavel\Contact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePavelContact extends Migration
{
    public function up()
    {
        Schema::create('pavel_contact_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->text('message');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pavel_contact_');
    }
}
