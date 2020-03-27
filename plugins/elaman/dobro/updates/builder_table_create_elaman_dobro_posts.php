<?php namespace Elaman\Dobro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElamanDobroPosts extends Migration
{
    public function up()
    {
        Schema::create('elaman_dobro_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('title');
            $table->text('content')->nullable();
            $table->string('slug');
            $table->integer('upvote_count')->default(0);
            $table->integer('downvote_count')->default(0);
            $table->integer('share_count')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elaman_dobro_posts');
    }
}
