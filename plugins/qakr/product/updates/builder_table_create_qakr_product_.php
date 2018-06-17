<?php namespace Qakr\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateQakrProduct extends Migration
{
    public function up()
    {
        Schema::create('qakr_product_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->boolean('active')->nullable()->default(0);
            $table->string('code')->nullable();
            $table->string('description_preview')->nullable();
            $table->string('description')->nullable();
            $table->string('image_preview')->nullable();
            $table->string('image_gallery')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('qakr_product_');
    }
}
