<?php
namespace CH\modificators;

use CH\basic\BC_Controller;

abstract class CH_Controller extends BC_Controller
{
    public $plugins;
    public function __construct()
    {   
        parent::__construct();
        // require '/../UzhKeksy/configs/path.config.php';
       // require '/home/david/Sync/it-step/Php_and_Sql/Exam/UzhKeksy/configs/path.config.php';
       // (new CH_Log)->log(PLUGINS);
       // $this->models_file = (new BC_FileWorker(PLUGINS))->files;
    }
}