<?php
// Controller class template made by UzhKeksy
namespace CH\basic;

use Exception;

/**
 * CH_Controller
 */
abstract class BC_Controller implements BC_Controller_Interface
{
    protected $views_file;
    protected $models_file;
    public $database_file;
    public $log;
    /**
     *  __Construct method
     */
    public function __construct()
    {
        require_once '../application/configs/path.config.php';
        $this->log = new BC_Log;
        $files = new BC_FileWorker(CORE);
        $this->views_file = (new BC_FileWorker(VIEWS))->files;
        $this->models_file = (new BC_FileWorker(MODELS))->files;
        $this->database_file = (new BC_FileWorker(CONFIGS))->files->{'database.config'};
    }


    /**
     * Method load
     *  this function load file by 2 attr. 
     * @param $toLoad $toLoad [file name to load]
     * @param array $variables [arr of variables that will be used in loaded view]
     *
     * @return void
     */
    public function load($toLoad, array $variables, $once = null)
    {
        if (isset($variables)) {
            foreach ($variables as $name => $data) {
                ${$name} = $data;
            }
        }
        if ($once) {
            if (!include_once $toLoad) {
                throw new Exception("file \'" . $toLoad . "\' does not exitst");
            }
        } else {
            if (!include $toLoad) {
                throw new Exception('file ' . $toLoad . ' does not exitst');
            }
        }
    }
}
