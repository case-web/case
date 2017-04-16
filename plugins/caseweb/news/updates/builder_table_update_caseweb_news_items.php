<?php namespace CaseWeb\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCasewebNewsItems extends Migration
{
    public function up()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->string('thumb');
            $table->string('content');
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->dropColumn('thumb');
            $table->dropColumn('content');
            $table->dropColumn('id');
        });
    }
}
