<?php namespace CaseWeb\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCasewebNewsCategory extends Migration
{
    public function up()
    {
        Schema::create('caseweb_news_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('name');
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('caseweb_news_category');
    }
}
