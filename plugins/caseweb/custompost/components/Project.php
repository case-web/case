<?php namespace CaseWeb\CustomPost\Components;

use Cms\Classes\ComponentBase;
use CaseWeb\CustomPost\Models\Post;
use CaseWeb\CustomPost\Models\Category;

class Project extends ComponentBase
{
    /**
     *
     */
    const BASE_PAGINATE = 10;

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Project Component',
            'description' => 'Отображение портфолио'
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [];
    }

    /**
     * @return Model
     */
    public function getPosts()
    {

        return Post::orderBy('id', 'desc')->get();

    }

    /**
     * @return Model
     */
    public function getPostsList() {

        return $this->getPostsWithPaginate(self::BASE_PAGINATE);

    }

    /**
     * @param $paginateNumber
     * @return Model
     */
    private function getPostsWithPaginate($paginateNumber) {

        return Post::orderBy('id', 'desc')->simplePaginate($paginateNumber);

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
