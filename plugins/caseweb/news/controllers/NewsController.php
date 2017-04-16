<?php namespace CaseWeb\News\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class NewsController extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('CaseWeb.News', 'main-menu-item');
    }
}