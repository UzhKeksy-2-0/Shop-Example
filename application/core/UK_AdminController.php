<?php

    namespace app\core;
    use UK\UK_Controller;
    abstract class UK_AdminController extends UK_Controller
    {
        public function __construct(){
            parent::__construct();
            echo 'logination';
        }
    }
