<?php
    namespace app\controllers\admin;

    use app\core\UK_AdminController;
    class Home extends UK_AdminController
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function pageLoad(){
            $this->load($this->views_file->templates->admin,['data'=>'https://uk.wordpress.org/']);
        }
    }
