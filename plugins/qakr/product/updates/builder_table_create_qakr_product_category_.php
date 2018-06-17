<?php namespace Qakr\Product\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateQakrProductCategory extends Migration
{
    public function up()
    {
        Schema::create('qakr_product_category_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->boolean('active')->nullable()->default(0);
            $table->string('url')->nullable();
            $table->string('code')->nullable();
            $table->string('description_preview')->nullable();
            $table->string('description')->nullable();
            $table->string('image_preview')->nullable();
            $table->string('image_gallery')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('qakr_product_category_');
    }
}
