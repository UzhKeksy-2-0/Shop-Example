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
        // Product::connect('localhost','root','','flower_shop');
        Product::connectByController($this);
        $products = Product::get();
        // (new UK_Log)->log('test');
        $this->load($this->views_file->templates->header,[]);
        $this->load($this->views_file->templates->home,['allProducts' => $products]);
        $this->load($this->views_file->templates->footer,[]);
    }
}
