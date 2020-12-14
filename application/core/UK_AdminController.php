<?php

    namespace app\core;
    use CH\modificators\Controller\CH_Controller;
    abstract class CH_AdminController extends CH_Controller
    {
        public function __construct(){
            parent::__construct();
            echo 'logination';
        }
    }
