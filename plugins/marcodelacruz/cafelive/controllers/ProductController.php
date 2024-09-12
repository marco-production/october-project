<?php namespace MarcoDeLaCruz\Cafelive\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class ProductController extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
        \Backend\Behaviors\ImportExportController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MarcoDeLaCruz.Cafelive', 'main-menu-item', 'side-menu-item3');
    }
    
    /*public function listExtendQuery($query)
    {
        $query->withTrashed();
    }
    
    public function formExtendQuery($query)
    {
        $query->withTrashed();
    }*/

}
