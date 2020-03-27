<?php namespace Elaman\Dobro\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElamanDobroPostCategory extends Migration
{
    public function up()
    {
        Schema::table('elaman_dobro_post_category', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('elaman_dobro_post_category', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
