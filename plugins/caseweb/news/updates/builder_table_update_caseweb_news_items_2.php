<?php namespace CaseWeb\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCasewebNewsItems2 extends Migration
{
    public function up()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->dateTime('crated_at');
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->dropColumn('crated_at');
            $table->increments('id')->unsigned()->change();
        });
    }
}
