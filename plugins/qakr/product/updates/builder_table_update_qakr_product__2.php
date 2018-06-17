<?php namespace Qakr\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateQakrProduct2 extends Migration
{
    public function up()
    {
        Schema::table('qakr_product_', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('qakr_product_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
