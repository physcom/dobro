<?php namespace Elaman\Dobro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElamanDobroPosts extends Migration
{
    public function up()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->integer('category_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
