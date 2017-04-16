<?php namespace CaseWeb\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCasewebNewsItems5 extends Migration
{
    public function up()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->integer('category_id')->unsigned();
            $table->dropColumn('category');
        });
    }
    
    public function down()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->dropColumn('category_id');
            $table->string('category', 255);
        });
    }
}
