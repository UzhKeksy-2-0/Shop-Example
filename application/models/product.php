<?php

namespace app\models;

use CH\modificators\DataBase\CH_DataBase;

class product extends CH_DataBase
{
    protected $dbTable = "product";
    protected $relations = Array(
        'image' => Array('hasMany', 'app\models\product_image', 'id')
    );
}
