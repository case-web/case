<?php namespace CaseWeb\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCasewebNewsItems extends Migration
{
    public function up()
    {
        Schema::create('caseweb_news_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('caseweb_news_items');
    }
}
