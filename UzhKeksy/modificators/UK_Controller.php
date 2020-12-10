<?php
namespace UK\modificators;

use UK\basic\BC_Controller;
use UK\basic\BC_FileWorker;

abstract class UK_Controller extends BC_Controller
{
    public $plugins;
    public function __construct()
    {   
        parent::__construct();
        // require '/../UzhKeksy/configs/path.config.php';
        require '/home/david/Sync/it-step/Php_and_Sql/Exam/UzhKeksy/configs/path.config.php';
        (new UK_Log)->log(PLUGINS);
       // $this->models_file = (new BC_FileWorker(PLUGINS))->files;
    }
}