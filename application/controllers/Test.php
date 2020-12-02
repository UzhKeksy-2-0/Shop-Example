<?php

use app\models\Product;
use UK\UK_Controller;

class Home extends UK_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function pageLoad(){
        
        $this->load($this->views_file->templates->product,
        [
            'name' => 'adf',
            'discription' => 'asdf',
            'price' => "$ " . 123,
        ]);
    }
}
