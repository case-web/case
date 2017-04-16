<?php namespace CaseWeb\News\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class CreateNewsItem extends Controller
{
    public $implement = ['Backend\Behaviors\FormController'];
    
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('CaseWeb.News', 'main-menu-item', 'side-menu-item');
    }
}