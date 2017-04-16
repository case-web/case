<?php namespace CaseWeb\CustomPost\Components;

use Cms\Classes\ComponentBase;
use CaseWeb\CustomPost\Models\Post;
use CaseWeb\CustomPost\Models\Category;

class Project extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Project Component',
            'description' => 'Отображение портфолио'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {

        return Post::orderBy('id', 'desc')->get();

    }

    /**
     * @return mixed
     */
    public function getCategories()
    {

        return Category::orderBy('id', 'desc')->get();

    }

    /**
     * @param $categoryId
     * @return mixed
     */
    public function getPostsByCategory($categoryId)
    {

        return Post::where('category_id', $categoryId)->get();

    }



}
