<?php
// Controller class template made by UzhKeksy
    namespace UK;

use Exception;
use UK\UK_View;
    
    /**
     * UK_Controller
     */
    abstract class UK_Controller implements UK_Controller_Interface
    {
        protected $views_file;
        protected $models_file;
        public $log;
        // protected $language_file;
        protected $deaultLanguage;
        /**
        *  __Construct method
        */
        public function __construct()
        {
            require_once '../application/configs/path.config.php';
            $log = new UK_Log;
            $files = new UK_FileWorker(CORE);
            $this->views_file = (new UK_FileWorker(VIEWS))->files;
            $this->models_file = (new UK_FileWorker(MODELS))->files;
            // $this->language_file = (new UK_FileWorker(LANGUAGES))->files;
            // $this->database_file = (new UK_FileWorker(DATA_BASE))->files;
        }   
        

        /**
         * Method load
         *  this function load file by 2 attr. 
         * @param $toLoad $toLoad [file name to load]
         * @param array $variables [arr of variables that will be used in loaded view]
         *
         * @return void
         */
        public function load($toLoad, array $variables, $once = null){
            if(isset($variables)){
                foreach($variables as $name => $data){
                    ${$name} = $data;
                } 
            }
            if($once){
                if(!include_once $toLoad){
                    throw new Exception("file \'".$toLoad."\' does not exitst");
                }
            }else{
                if(!include $toLoad){
                    throw new Exception('file '.$toLoad.' does not exitst');
                }
            }
        }

        /**
        * Get $views_file
        */
        public function getviews_file()
        {
            return $this->views_file;
        }

        /**
        * Get $models
        */
        public function getModels()
        {
            return $this->models_file;
        }
    }
