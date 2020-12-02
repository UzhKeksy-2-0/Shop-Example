<?php
    namespace app\controllers\user;
    use UK\UK_Controller;
    class Home extends UK_Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function pageLoad(){
           $this->load($this->views_file->templates->home,['dasf'=>'hello']);
        }

    }
