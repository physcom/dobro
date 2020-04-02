<?php namespace Elaman\Profile\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddAddressFieldsTable extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
             $table->string('address')->nullable();
        });
    }

    public function down()
    {   
        if (Schema::hasColumn('users', 'address'))
        {
            Schema::table('users', function($table)
            {
                $table->dropColumn([
                    'address'
                ]);
            
            });
        }
        
    }

}
