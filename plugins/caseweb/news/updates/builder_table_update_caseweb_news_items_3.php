<?php namespace CaseWeb\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCasewebNewsItems3 extends Migration
{
    public function up()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->string('cotegory');
        });
    }
    
    public function down()
    {
        Schema::table('caseweb_news_items', function($table)
        {
            $table->dropColumn('cotegory');
        });
    }
}
