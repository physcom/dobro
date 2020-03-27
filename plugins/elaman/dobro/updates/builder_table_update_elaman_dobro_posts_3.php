<?php namespace Elaman\Dobro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElamanDobroPosts3 extends Migration
{
    public function up()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->renameColumn('category_id', 'post_category_id');
        });
    }
    
    public function down()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->renameColumn('post_category_id', 'category_id');
        });
    }
}
