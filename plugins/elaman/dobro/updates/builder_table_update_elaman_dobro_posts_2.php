<?php namespace Elaman\Dobro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElamanDobroPosts2 extends Migration
{
    public function up()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->string('title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->integer('title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
