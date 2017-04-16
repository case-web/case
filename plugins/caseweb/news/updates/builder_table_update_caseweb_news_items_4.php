<?php namespace CaseWeb\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCasewebNewsItems4 extends Migration
{
    public function up()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->renameColumn('cotegory', 'category');
        });
    }
    
    public function down()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->renameColumn('category', 'cotegory');
        });
    }
}
