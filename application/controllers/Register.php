<?php

use app\models\Product;
use CH\modificators\CH_Controller;
use CH\modificators\CH_Log;

class HomDatae extends CH_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pageLoad(){
        Product::connect('localhost','root','','flower_shop');
        $products = Product::get();
        $this->load($this->views_file->templates->header,[]);
        $this->load($this->views_file->templates->register,[]);
        $this->load($this->views_file->templates->footer,[]);



        
    }
}
