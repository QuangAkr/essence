<?php namespace Qakr\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateQakrCategory2 extends Migration
{
    public function up()
    {
        Schema::table('qakr_category_', function($table)
        {
            $table->boolean('active')->nullable()->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('qakr_category_', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
