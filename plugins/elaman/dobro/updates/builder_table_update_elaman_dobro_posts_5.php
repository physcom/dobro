<?php namespace Elaman\Dobro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElamanDobroPosts5 extends Migration
{
    public function up()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->integer('view_count')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->dropColumn('view_count');
        });
    }
}
