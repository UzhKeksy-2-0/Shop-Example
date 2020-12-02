<?php
    namespace app\controllers\user;
    use UK\UK_Controller;
    class Test extends UK_Controller
    {
        public $test;
        public function __construct()
        {
            parent::__construct();
        }
        public function pageLoad(){
            require $this->views_file->templates->home;
        }

    }
            