<?php namespace Elaman\Dobro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElamanDobroPosts4 extends Migration
{
    public function up()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->string('author')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('elaman_dobro_posts', function($table)
        {
            $table->dropColumn('author');
            $table->dropColumn('phone');
            $table->dropColumn('address');
        });
    }
}
