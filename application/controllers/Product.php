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
        $this->load($this->views_file->templates->header,[]);
        product::connectByController($this);
        $product = product::byId($data['get']['prod']);
        $this->load($this->views_file->templates->productpage,[
            'category'=>$product->category,
            'prodName' => $product->name,
            'prodDisk' =>  $product->discription,
            'prodPrice' => $product->price,
            'photos' => [
                'https://estore.ua/media/post/image/i/p/iphone_12_in_the_box.jpg',
                'https://ilounge.ua/files/articles/review-iphone-12-pro-max--samyj-interesnyj-smartfon-i-vybrat-ego-stoit-tolko-radi-kamery-1.jpg'
            ]
        ]);
        $this->load($this->views_file->templates->viewresponce,[]);
        $this->load($this->views_file->templates->responce,[]);
        $this->load($this->views_file->templates->footer,[]);
    }
}
