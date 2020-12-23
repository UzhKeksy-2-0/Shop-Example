<?php
namespace app\controllers;

use CH\modificators\Controller\CH_Controller;

class ControllerName extends CH_Controller
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
        $this->load($this->views_file->templates->aboutus,[]);
        $this->load($this->views_file->templates->footer,[]);
    }
}