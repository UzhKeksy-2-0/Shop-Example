<?php
namespace app\controllers;

use app\models\product;
use CH\modificators\Auth\Authorization;
use CH\modificators\Cart\Cart;
use CH\modificators\Controller\CH_Controller;
use Exception;

class ControllerName extends CH_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function run($data = null){
       $this->pageLoad($data);
    }
    public function pageLoad($data = null){
        if($data['get'] == null){
            throw new Exception('',404);
        }
        product::connectByController($this);
        $product = product::byId($data['get']['prod']);
        $stars = 0;
        $feedback = $product->feedback;
        foreach($feedback as $star){
            $stars += $star->stars;
        }
        $stars = $stars / count($feedback);
        $this->load($this->views_file->templates->header,['title' => $product->name]);
        $this->load($this->views_file->templates->productpage,[
            'category'=>$product->category,
            'prodName' => $product->name,
            'stars' => $stars,
            'prodDisk' =>  substr($product->discription,0,450) . ' ...',
            'prodPrice' => $product->price,
            'photos' => $product->image
        ]);
        foreach($feedback as $one){
            foreach($one as $star){
                $stars += $star->stars;
            }
            $stars = $stars / count($feedback);
            $this->load($this->views_file->templates->viewresponce,['respText'=> $one->description == ''? 'no description': $one->description, 'stars' =>$stars, 'userName' => $one->user->login]);
        }
        if(Authorization::isAuthorized()){
            $this->load($this->views_file->templates->responce,[]);
        }
        $this->load($this->views_file->templates->footer,[]);
    }
}
