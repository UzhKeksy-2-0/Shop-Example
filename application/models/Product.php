<?php
    namespace app\models;

use UK\modificators\UK_DataBase;

class Product extends UK_DataBase
{
    protected $dbTable = "product";
    public $id;
    public $name_sd;
    public $discription;
    public $price;


}
