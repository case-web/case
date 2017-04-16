<?php namespace CaseWeb\CustomPost\Components;

use Cms\Classes\ComponentBase;
use CaseWeb\CustomPost\Models\Post;

class SingleProject extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'SingleProject Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    /**
     *
     */
//    public function onRun()
//    {
//
//       $post = $this->getCurrentPost();
//
//       $this->page['project'] = $post;
//
//    }


    /**
     *
     */
    public function onRun()
    {

        $project = $this->getCurrentPost();
        $this->page['project'] = $project;
    }

    /**
     * @return mixed
     */
    public function getCurrentPost()
    {

      $alias = $this->property('alias');


        if (!is_numeric($alias)) {

            return $this->getPostBySlug($alias);

        }

        return $this->getPostById($alias);


    }

    /**
     * @param $slug
     * @return mixed
     */
    protected function getPostBySlug($slug)
    {

        return Post::where('slug', $slug)->first();

    }


    /**
     * @param $id
     * @return mixed
     */
    protected function getPostById($id)
    {

        return Post::where('id', $id)->first();

    }
}
