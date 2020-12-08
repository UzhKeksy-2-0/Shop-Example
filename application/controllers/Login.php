<?php

use app\models\Product;
use UK\basic\UK_Controller;
use UK\basic\UK_Log;

class HomDatae extends UK_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pageLoad(){
        Product::connect('localhost','root','','flower_shop');
        $products = Product::get();
        $this->load($this->views_file->templates->header,[]);
        $this->load($this->views_file->templates->login,[]);
        $this->load($this->views_file->templates->footer,[]);



        
    }
}
