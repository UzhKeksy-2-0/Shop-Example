<?php
namespace app\controllers;

use app\models\product;
use CH\modificators\Controller\CH_Controller;

class HomDatae extends CH_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pageLoad(){
        //Product::connectByController($this);
       // $products = Product::get();
        $this->load($this->views_file->templates->header,[]);
       // $this->load($this->views_file->templates->home,['allProducts' => $products]);
        $this->load($this->views_file->templates->footer,[]);
    }
}
