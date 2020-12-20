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
        product::connectByController($this);
        $products = product::get();
        product::$pageLimit = 15;
        $products = product::arraybuilder()->paginate(1);
        $this->load($this->views_file->templates->header,['title' => 'Home']);
        $this->load($this->views_file->templates->home,['allProducts' => $products]);
        $this->load($this->views_file->templates->footer,[]);
    }
}
