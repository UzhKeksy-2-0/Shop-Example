<?php

use app\models\Product;
use CH\modificators\Controller\CH_Controller;
use CH\modificators\Log\CH_Log;

class HomDatae extends CH_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function run(){
        $this->pageLoad();
    }
    public function pageLoad(){
        $this->load($this->views_file->templates->header,[]);
        $this->load($this->views_file->templates->login,[]);
        $this->load($this->views_file->templates->footer,[]);
    }
}
