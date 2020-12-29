<?php
namespace app\controllers;

use app\models\product;
use CH\modificators\Auth\Authorization;
use CH\modificators\Controller\CH_Controller;

class HomDatae extends CH_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function run($data = null){
        $this->pageLoad();
    }
    public function pageLoad($data = null)
    {
        // product::connectByController($this);
        product::connect('mysql','127.0.0.1','flower_shop','root','root');
        $products = product::get();
        var_dump($products);
        $this->load($this->views_file->templates->header,['title' => 'Home', 'auth'=> Authorization::isAuthorized()]);
        $this->load($this->views_file->templates->home,['allProducts' => $products]);
        $this->load($this->views_file->templates->footer,[]);
    }
}
