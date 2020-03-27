<?php namespace Elaman\Dobro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElamanDobroPostCategory extends Migration
{
    public function up()
    {
        Schema::create('elaman_dobro_post_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title');
            $table->integer('parent_id')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elaman_dobro_post_category');
    }
}
