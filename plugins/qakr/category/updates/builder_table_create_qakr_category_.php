<?php namespace Qakr\Category\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateQakrCategory extends Migration
{
    public function up()
    {
        Schema::create('qakr_category_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('url')->nullable();
            $table->string('code')->nullable();
            $table->string('description_preview')->nullable();
            $table->string('description')->nullable();
            $table->string('image_preview')->nullable();
            $table->string('image_gallery')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('qakr_category_');
    }
}
