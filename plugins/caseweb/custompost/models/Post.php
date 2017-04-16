<?php namespace CaseWeb\CustomPost\Models;

use Model;

/**
 * Post Model
 */
class Post extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'caseweb_custompost_posts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = ['Category'];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = ['attachment' => ['System\Models\File']];
    public $attachMany = ['attachments' => ['System\Models\File']];


    /**
     * @param $value
     * @param $formData
     * @return array
     */
    public function getCategoryIdOptions($value, $formData)
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
