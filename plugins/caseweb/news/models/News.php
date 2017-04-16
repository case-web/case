<?php namespace CaseWeb\News\Models;

use Model;

/**
 * Model
 */
class News extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'caseweb_news_items';


    /**
     * @return array
     */
    public function getCategoryIdOptions()
    {

        $categories = Category::all();
        $data = [];

        foreach ($categories as $category) {
            $arr = [$category->id => $category->name];

            $data = $data + $arr;
        }

        return $data;

    }
}