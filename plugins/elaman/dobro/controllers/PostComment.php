<?php namespace Elaman\Dobro\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PostComment extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Elaman.Dobro', 'main-menu-item2', 'side-menu-item');
    }
}
