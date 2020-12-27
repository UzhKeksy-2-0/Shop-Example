<?php
// Controller class template made by UzhKeksy
namespace CH\basic;

use app\configs\php\Path;
use Exception;

/**
 * CH_Controller
 */
abstract class BC_Controller implements BC_Controller_Interface
{    
    /**
     * views_file
     * path to folder view in application
     * @var mixed
     */
    protected $views_file;    
    /**
     * models_file
     * path to folder models in application
     * @var mixed
     */
    protected $models_file;    
    /**
     * database_file
     * path to config file data base
     * @var mixed
     */
    public $database_file;    
    /**
     * log
     * path to file log
     * @var mixed
     */
    public $log;

    /**
     *  __Construct method
     */
    public function __construct()
    {
        Path::setPathConfiguration();
        $this->log = new BC_Log;
        $files = new BC_FilePather(CORE);
        $this->views_file = (new BC_FilePather(Path::VIEWS()))->files;
        $this->models_file = (new BC_FilePather(Path::MODELS()))->files;
        $this->database_file = (new BC_FilePather(Path::CONFIGS()))->files->{'database.config'};
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
