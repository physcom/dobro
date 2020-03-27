<?php namespace Elaman\Dobro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElamanDobroComments extends Migration
{
    public function up()
    {
        Schema::create('elaman_dobro_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('author');
            $table->text('comment');
            $table->integer('post_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elaman_dobro_comments');
    }
}
