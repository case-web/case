<?php namespace CaseWeb\CustomPost;

use Backend;
use System\Classes\PluginBase;

/**
 * CustomPost Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'CustomPost',
            'description' => 'No description provided yet...',
            'author'      => 'CaseWeb',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'CaseWeb\CustomPost\Components\Project' => 'project',
            'CaseWeb\CustomPost\Components\SingleProject' => 'SingleProject'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {


        return [
            'caseweb.custompost.some_permission' => [
                'tab' => 'CustomPost',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {


        return [
            'custompost' => [
                'label'       => 'Портфолио',
                'url'         => Backend::url('caseweb/custompost/posts'),
                'icon'        => 'icon-leaf',
                'permissions' => ['caseweb.custompost.*'],
                'order'       => 500,
                'sideMenu' => [
                    'posts' => [
                        'label' => 'Портфолио',
                        'icon' => 'icon-tag',
                        'url' =>  Backend::url('caseweb/custompost/posts')
                    ],
                    'categories' => [
                        'label' => 'Категории',
                        'icon' => 'icon-tags',
                        'url' => Backend::url('caseweb/custompost/categories')
                    ]
                ]
            ],
        ];
    }
}
