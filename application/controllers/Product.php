<?php
namespace app\controllers;

use app\models\product;
use CH\modificators\Controller\CH_Controller;
use Exception;

class ControllerName extends CH_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pageLoad($data = null){
        if($data['get'] == null){
            throw new Exception('',404);
        }
        product::connectByController($this);
        $product = product::byId($data['get']['prod']);
        $this->load($this->views_file->templates->header,['title' => $product->name]);
        $this->load($this->views_file->templates->productpage,[
            'category'=>$product->category,
            'prodName' => $product->name,
            'prodDisk' =>  substr($product->discription,0,150) . ' ...',
            'prodPrice' => $product->price,
            'photos' => $product->image
        ]);
        $this->load($this->views_file->templates->viewresponce,[]);
        $this->load($this->views_file->templates->responce,[]);
        $this->load($this->views_file->templates->footer,[]);
    }
}
